<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Training;

class TrainingController extends Controller
{
   public function training(Request $request)
   {
      return view('training');
   }

   public function detail($id, Request $request)
   {
      $tocGenerator = new \TOC\TocGenerator();

      $training = Training::where('id',$id)->active()->first();
      if (empty($training)) {
         abort(404);
      }
      $trainings = Training::where('id', '!=', $id)->get();

      $markupFixer  = new \TOC\MarkupFixer();
      $training->content = $markupFixer->fix($training->content);
      $toc = $tocGenerator->getHtmlMenu($training->content, 1,3);

      return view('training', compact('training', 'trainings', 'toc'));
   }
}
