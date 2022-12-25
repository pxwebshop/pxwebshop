<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Support\Str;
use Brian2694\Toastr\Facades\Toastr;

class CategoryController extends Controller
{
    public function index(Request $request)
    {
        $categories = Category::all();

        return view('admin.category.list', compact('categories'));
    }

    public function addCategory(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:categories|min:2',
            'slug' => 'required|alpha_dash|unique:categories,slug'
        ]);

        $data = [
            'name' => $request->get('name'),
            'slug' => Str::slug($request->get('slug')),
            'description' => $request->get('description'),
        ];


        $category = Category::create($data);

        if ($category) {
            Toastr::success("Tạo danh mục ". $request->get('name') ." thành công!");
        } else {
            Toastr::error("Tạo danh mục ". $request->get('name') ." thất bại!");
        }

        return redirect()->route('categories');
    }
}
