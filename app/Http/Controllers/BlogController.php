<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Blog;
class BlogController extends Controller
{
   public function blog(Request $request)
   {
      return view('blog');
   }

   public function detail($id, Request $request)
   {
      $blog = Blog::find($id);

      return view('blog', compact('blog'));
   }
}
