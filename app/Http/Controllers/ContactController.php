<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Contact;
use Carbon\Carbon;

class ContactController extends Controller
{
   public function index(Request $request)
   {
      return view('contact');
   }

   public function postContact(Request $request)
   {
      $request->validate([
         'name'           => 'required|max:100|min:3',
         'email'          => [
            'required',
            'email',
            function ($attribute, $value, $fail) use($request) {
               if (Contact::whereEmail($request->get('email'))->whereDate('created_at', Carbon::today())->exists()) {
                  $fail($attribute.' đã đăng ký.');
               }
            },
         ],
         'phone' => 'required|numeric|min:10',
      ], [
         'name.required'  => 'Vui lòng nhập họ tên',
         'name.max'  => 'Họ tên của bạn quá dài',
         'name.min'  => 'Họ tên bạn quá ngắn',
         'email.required'  => 'Vui lòng nhập địa chỉ email',
         'email.email'  => 'Địa chỉ email không hợp lệ',
         'phone.required'  => 'Vui lòng nhập số điện thoại',
         'phone.numeric'  => 'Số điện thoại không đúng',
         'phone.min'  => 'Số điện thoại quá ngắn',
      ]);

      try {
         Contact::create($request->all());
      } catch (\Exception $ex) {
         return redirect()->back()->with('error', 'Vui lòng liên hệ PXwebshop để được hỗ trợ'. $ex->getMessage());
      }

      return redirect()->back()->with('success', 'Chúng tôi sẽ liên hệ đến bạn nhanh thôi!');   
   }
}