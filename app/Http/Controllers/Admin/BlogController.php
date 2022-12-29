<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Blog;
use App\Models\BlogCategory;
use Brian2694\Toastr\Facades\Toastr;
use App\Http\Requests\Blog\CreateBlogRequest;
use Auth;

class BlogController extends Controller
{
   public function index(Request $request)
   {
      $blogs = Blog::with(['category', 'user'])->orderBy('created_at', 'desc')->get();

      return view('admin.blog.list', compact('blogs'));
   }

   public function add(Request $request)
   {
      $categories = Category::all();

      return view('admin.blog.add', compact('categories'));
   }

   public function postAdd(CreateBlogRequest $request)
   {
      $categories = $request->get('categories');

      \DB::beginTransaction();

      if ($request->hasFile('featured_image')) {
         $image      = $request->file('featured_image');
         $fileName   = time() . '.' . $image->getClientOriginalExtension();

         $img = \Image::make($image->getRealPath());
         $img->resize(320, 320, function ($constraint) {
             $constraint->aspectRatio();                 
         });

         $img->stream(); // <-- Key point
         $data = [
            'featured_image'     => $fileName
         ];
      }

      $data = [
         'user_id'            => \Auth::user()->id,
         'status'             => $request->input('status'),
         'title'              => $request->input('title'),
         'content'            => $request->input('content'),
      ];
      $blog = Blog::create($data);
     
      foreach ($categories as $id) {
         $blog->blog_category()->attach([ $id ]);
      }

      try {
         Toastr::success('Bài viết đã được tạo!');
         \DB::commit();

         if ($request->hasFile('featured_image')) {
            \Storage::disk('local')->put('public/images/blog/feature/'.$fileName, $img);
         }
      } catch(\Exception $e) {
         Toastr::error('Tạo bài viết thất bại!'. $e->getMessage());
         \DB::rollback();
      }

      return redirect()->route('list_blog');
   }

   public function edit($id, Request $request)
   {
      $blog = Blog::find($id);
      $categories = Category::all();

      return view('admin.blog.add', compact('categories', 'blog'));
   }

   public function postEdit($id, CreateBlogRequest $request)
   {
      $blog = Blog::find($id);
      $blog->title = $request->get('title');
      $blog->content = $request->get('content');
      $blog->status = $request->get('status');
      $blog->user_id = \Auth::user()->id;
      $fileOld = $blog->featured_image;

      \DB::beginTransaction();

      if ($request->hasFile('featured_image')) {
         $image      = $request->file('featured_image');
         $fileName   = time() . '.' . $image->getClientOriginalExtension();

         $img = \Image::make($image->getRealPath());
         $img->resize(320, 320, function ($constraint) {
             $constraint->aspectRatio();                 
         });

         $img->stream();

         $blog->featured_image = $fileName;
      }

      $categories = $request->get('categories') ?: [];

      $blog->blog_category()->sync($categories);
      
      try {
         $blog->save();
         if($blog->isDirty()) {
            Toastr::success('Cập nhật bài viết thành công!');
         } else {
            Toastr::warning('Dữ liệu chưa được thay đổi. Ngoại trừ danh mục');
         }
         \DB::commit();
         if ($request->hasFile('featured_image')) {
            \Storage::disk('local')->put('public/images/blog/feature/'.$fileName, $img);
            \Storage::delete('public/images/blog/feature/'. $fileOld);
         }
      } catch(\Exception $e) {
         Toastr::error('Cập nhật bài viết thất bại!'. $e->getMessage());
         \DB::rollback();
      }

      return back();
   }


   public function delete($id, Request $request)
   {
       try {
         $blog = Blog::find($id);
         $blog->delete();
         Toastr::success("Xoá bài viết thành công!");
       } catch (\Exception $ex) {
         Toastr::error("Xoá bài viết thất bại!". $ex->getMessage());
       }

       return redirect()->route('list_blog');
   }
}