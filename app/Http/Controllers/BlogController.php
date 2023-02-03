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

   public function detail($slug, Request $request)
   {
      $tocGenerator = new \TOC\TocGenerator();

      $blog = Blog::where('slug', $slug)->active()->first();
      if (empty($blog)) {
         abort(404);
      }
      $blogs = Blog::where('slug', '!=', $slug)->get();

      $markupFixer  = new \TOC\MarkupFixer();
      $blog->content = $markupFixer->fix($blog->content);
      $toc = $tocGenerator->getHtmlMenu($blog->content, 1,3);

      return view('blog', compact('blog', 'blogs', 'toc'));
   }
}
