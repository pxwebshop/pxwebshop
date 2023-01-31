<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Training;
use Brian2694\Toastr\Facades\Toastr;
use App\Http\Requests\Blog\CreateBlogRequest;
use Auth;

class TrainingController extends Controller
{
   public function index(Request $request)
   {
      $training = Training::with(['category', 'user'])->orderBy('created_at', 'desc')->get();

      return view('admin.training.list', compact('training'));
   }

   public function add(Request $request)
   {
      $categories = Category::typeTraining()->get();

      return view('admin.training.add', compact('categories'));
   }

   public function postAdd(CreateBlogRequest $request)
   {
      $categories = $request->get('categories');

      \DB::beginTransaction();
      $data = [];
      if ($request->hasFile('featured_image')) {
         $image      = $request->file('featured_image');
         $fileName   = time() . '.' . $image->getClientOriginalExtension();

         $img = \Image::make($image->getRealPath());
         $img->resize(400, 300, function ($constraint) {
             $constraint->aspectRatio();                 
         });

         $img->stream(); // <-- Key point
         $data = [
            'featured_image'     => $fileName
         ];
      }

      $data1 = [
         'user_id'            => \Auth::user()->id,
         'status'             => $request->input('status'),
         'title'              => $request->input('title'),
         'content'            => $request->input('content'),
         'description'        => $request->input('description'),
      ];

      $result = array_merge($data, $data1);

      $training = Training::create($result);
     
      foreach ($categories as $id) {
         $training->training_category()->attach([ $id ]);
      }

      try {
         Toastr::success('Bài viết đã được tạo!');
         \DB::commit();

         if ($request->hasFile('featured_image')) {
            \Storage::disk('local')->put('public/images/training/feature/'.$fileName, $img);
         }
      } catch(\Exception $e) {
         Toastr::error('Tạo bài viết thất bại!'. $e->getMessage());
         \DB::rollback();
      }

      return redirect()->route('list_training');
   }

   public function edit($id, Request $request)
   {
      $training = Training::find($id);
      $categories = Category::typeTraining()->get();
      
      return view('admin.training.add', compact('categories', 'training'));
   }

   public function postEdit($id, CreateBlogRequest $request)
   {
      $training = Training::find($id);
      $training->title = $request->get('title');
      $training->content = $request->get('content');
      $training->status = $request->get('status');
      $training->description = $request->get('description');
      $fileOld = $training->featured_image;

      \DB::beginTransaction();

      if ($request->hasFile('featured_image')) {
         $image      = $request->file('featured_image');
         $fileName   = time() . '.' . $image->getClientOriginalExtension();

         $img = \Image::make($image->getRealPath());
         $img->resize(400, 300, function ($constraint) {
             $constraint->aspectRatio();                 
         });

         $img->stream();

         $training->featured_image = $fileName;
      }

      $categories = $request->get('categories') ?: [];

      $training->training_category()->sync($categories);
      
      try {
         if($training->isDirty()) {
            Toastr::success('Cập nhật bài viết thành công!');
         } else {
            Toastr::warning('Dữ liệu chưa được thay đổi. Ngoại trừ danh mục');
         }
         $training->save();

         \DB::commit();
         
         if ($request->hasFile('featured_image')) {
            \Storage::disk('local')->put('public/images/training/feature/'.$fileName, $img);
            \Storage::delete('public/images/training/feature/'. $fileOld);
         }
      } catch(\Exception $e) {
         Toastr::error('Cập nhật bài viết thất bại!'. $e->getMessage());
         \DB::rollback();
      }

      return back();
   }

   public function delete($id, Request $request)
   {
      \DB::beginTransaction();
       try {
         $training = Training::find($id);
         $training->delete();
         \DB::commit();
         Toastr::success("Xoá bài viết thành công!");
      } catch (\Exception $ex) {
         \DB::rollback();
         Toastr::error("Xoá bài viết thất bại!". $ex->getMessage());
      }

      return redirect()->route('list_training');
   }

   public function outstanding(Request $request)
   {
      $data = Blog::select('id', 'title')->active()->notOutstanding()->get();
      $categories = Category::select('name', 'id')->get();
      $outstanding = Blog::select('id', 'title')->active()->outstanding()->get();

      $ids = $outstanding->pluck('id')->toArray();

      return view('admin.blog.outstanding', compact('data', 'categories', 'outstanding','ids'));
   }

   public function postOutstanding(Request $request)
   {
      \DB::beginTransaction();
      
      try {

         Blog::whereIn('id', json_decode($request->get('blog-outstanding-choose'), true))
         ->update(array('outstanding' => 0));

         $ids = json_decode($request->get('blog-outstanding'), true);
         foreach($ids as $id) {
            $blog = Blog::find($id);
            $blog->outstanding = Blog::OUTSTANDING;
            $blog->save();
         }
         \DB::commit();
         Toastr::success("Cập nhật thành công!");
      } catch(\Exception $e) {
         Toastr::error('Thất bại!'. $e->getMessage());
         \DB::rollback();
      }

      return redirect()->route('outstanding');
   }
}