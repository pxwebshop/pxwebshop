<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PrivacyPolicyController extends Controller
{
   public function index(Request $request)
   {
      return view('privacy-policy');
   }

   public function termsOfUse(Request $request)
   {
      return view('terms-of-use');
   }
}
