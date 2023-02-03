<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Training;
use App\Models\Image;
use Brian2694\Toastr\Facades\Toastr;
use App\Http\Requests\Blog\CreateBlogRequest;
use Auth;
use Illuminate\Support\Str;
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
      ];

      $result = array_merge($data, $data1);

      $training = Training::create($result);
      $training->slug = Str::slug($training->title .'-'. $training->id. '.html');
      $training->save();

      foreach ($categories as $id) {
         $training->training_category()->attach([ $id ]);
      }

      try {
         Toastr::success('Bài viết đã được tạo!');
         \DB::commit();

         if ($request->hasFile('featured_image')) {
            \Storage::disk('local')->put('public/images/training/feature/'.$fileName, $img);
         }

         $fileRemove = $request->get('remove_file');
         $arrayFile = explode(",", $fileRemove);
         
         if($files = $request->file('images')) {
            foreach($files as $image) {
               if (in_array( $image->getClientOriginalName() ,$arrayFile )) {
                  $extention = $image->getClientOriginalExtension();
                  $fileName = time().rand(1, 50). '.' . $extention;
   
                  $img = \Image::make($image->getRealPath());
                  $img->resize(600, 400, function ($constraint) {
                     $constraint->aspectRatio();                 
                  });
   
                  $img->stream(); // <-- Key point
                  \Storage::disk('local')->put('public/images/training/slide/'.$fileName, $img);
   
                  $training->image()->create(['name' => $fileName ]);
               }
            }
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
      $fileOld = $training->featured_image;
      $training->slug = Str::slug($training->title .'-'. $training->id. '.html');

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

         $fileRemove = $request->get('remove_file');
         $arrayFile = explode(",", $fileRemove);
         
         foreach($training->image()->get() as $image) {
            if (!in_array($image->name, $arrayFile )) {
               $training->image()->where([
                  'name' => $image->name
               ])->delete();
               \Storage::delete('public/images/training/feature/'. $image->name);
            }
         }

         if($files = $request->file('images')) {
            foreach($files as $image) {
               if (in_array( $image->getClientOriginalName(), $arrayFile )) {
                  $extention = $image->getClientOriginalExtension();
                  $fileName = time().rand(1, 50). '.' . $extention;
   
                  $img = \Image::make($image->getRealPath());
                  $img->resize(600, 400, function ($constraint) {
                     $constraint->aspectRatio();                 
                  });
   
                  $img->stream(); // <-- Key point
                  \Storage::disk('local')->put('public/images/training/slide/'.$fileName, $img);
   
                  $training->image()->create(['name' => $fileName ]);
               }
            }
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
      $data = Training::select('id', 'title')->active()->notOutstanding()->get();
      $categories = Category::select('name', 'id')->get();
      $outstanding = Training::select('id', 'title')->active()->outstanding()->get();

      $ids = $outstanding->pluck('id')->toArray();

      return view('admin.training.outstanding', compact('data', 'categories', 'outstanding','ids'));
   }

   public function postOutstanding(Request $request)
   {
      \DB::beginTransaction();
      
      try {

         Training::whereIn('id', json_decode($request->get('training-outstanding-choose'), true))
         ->update(array('outstanding' => 0));

         $ids = json_decode($request->get('training-outstanding'), true);
         foreach($ids as $id) {
            $training = Training::find($id);
            $training->outstanding = Training::OUTSTANDING;
            $training->save();
         }
         \DB::commit();
         Toastr::success("Cập nhật thành công!");
      } catch(\Exception $e) {
         Toastr::error('Thất bại!'. $e->getMessage());
         \DB::rollback();
      }

      return redirect()->route('training_outstanding');
   }
}