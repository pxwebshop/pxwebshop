<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BlogController extends Controller
{
   public function index(Request $request)
   {
        return view('admin.blog.list');
   }
}
