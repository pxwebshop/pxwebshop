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

   public function detail($slug, Request $request)
   {
      $training = Training::where('slug',$slug)->active()->first();
      if (empty($training)) {
         abort(404);
      }
      $sliders = $training->image()->get();
      $trainings = Training::with('user')->where('slug', '!=', $slug)->orderBy('created_at', 'desc')->take(5)->get();

      return view('detail-training', compact('training', 'sliders', 'trainings'));
   }
}
