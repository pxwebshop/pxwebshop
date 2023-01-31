<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Support\Str;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Validation\Rule;
class CategoryController extends Controller
{
    public function index(Request $request)
    {
        $categories = Category::where('type', $request->get('type'))->get();

        return view('admin.category.list', compact('categories'));
    }

    public function addCategory(Request $request)
    {
        $request->validate([
            'name' => ['required', Rule::unique('categories')->where(function ($query) use ($request) {
                return $query->where('type', $request->get('type'))->where('name', Str::slug($request->get('name')));
            })],
            'slug' => ['required', 'alpha_dash', Rule::unique('categories')->where(function ($query) use ($request) {
                return $query->where('type', $request->get('type'))->where('slug', Str::slug($request->get('slug')));
            })],
        ]);

        $data = [
            'name' => $request->get('name'),
            'slug' => Str::slug($request->get('slug')),
            'description' => $request->get('description'),
            'type' => $request->get('type'),
        ];

        try {
            $category = Category::create($data);
            if ($category) {
                Toastr::success("Tạo danh mục ". $request->get('name') ." thành công!");
            } else {
                Toastr::error("Tạo danh mục ". $request->get('name') ." thất bại!");
            }
        } catch (\Exception $ex) {
            Toastr::error("Tạo danh mục ". $request->get('name') ." thất bại! ". $ex->getMessage());
        }

        return redirect()->back();
    }


    public function edit($id, Request $request)
    {
        $categories = Category::all();
        $category = Category::find($id);

        return view('admin.category.list', compact('categories','category'));
    }

    public function postEdit($id, Request $request)
   {
        $request->validate([
            'name' => 'required|unique:categories|min:2',
            'slug' => 'required|alpha_dash'
        ]);
        
        $category = Category::find($id);
        $category->name = $request->get('name');
        $category->description = $request->get('description');

        if ($category->slug != Str::slug($request->get('slug'))) {
            $category->slug = Str::slug($request->get('slug'));
        }

        try {
            $category->save();

            if($category->isDirty()) {
                Toastr::success('Danh mục đã thay đổi thành công.');
            } else {
                Toastr::warning('Dữ liệu chưa được thay đổi');
            }
        } catch (\Exception $ex) {
            Toastr::error('Có lỗi khi lưu dữ liệu '. $ex->getMessage());
        }

        return redirect()->back();
   }

   public function delete($id, Request $request)
   {
        \DB::beginTransaction();
       try {
         $category = Category::find($id);
         $category->delete();
         Toastr::success("Xóa danh mục ". $category->name ." thành công!");
         \DB::commit();
       } catch (\Exception $ex) {
         Toastr::error("Vui lòng bỏ cấp quyền. Xóa danh mục ". $category->name ." thất bại!". $ex->getMessage());
         \DB::rollback();
       }

       return redirect()->back();
   }
}
