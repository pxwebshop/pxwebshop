<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BlogController extends Controller
{
   public function blog(Request $request)
   {
      return view('blog');
   }

   public function detail(Request $request)
   {
      return view('blog');
   }
}
