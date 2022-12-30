<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;
use App\Models\Order;
use Brian2694\Toastr\Facades\Toastr;
class HomeController extends Controller
{
     public function index(Request $request)
     {
          return view('index');
     }

     public function contact(Request $request)
     {
          return view('contact');
     }

     public function postForm(Request $request)
     {
          $validator = Validator::make($request->all(), [
               'name'           => 'required|max:100|min:3',
               'email'          => 'required|email',
               'phone'          => 'required|numeric|min:10',
               'service_pack'   => 'required|numeric|min:0|not_in:0'
          ], [
               'name.required'  => 'Vui lòng nhập họ tên',
               'name.max'  => 'Họ tên của bạn quá dài',
               'name.min'  => 'Họ tên bạn quá ngắn',
               'email.required'  => 'Vui lòng nhập địa chỉ email',
               'email.email'  => 'Địa chỉ email không hợp lệ',
               'phone.required'  => 'Vui lòng nhập số điện thoại',
               'phone.numeric'  => 'Số điện thoại không đúng',
               'phone.min'  => 'Số điện thoại quá ngắn',
               'service_pack.required'  => 'Vui lòng chọn gói dịch vụ',
               'service_pack.min'  => 'Vui lòng chọn gói dịch vụ',
               'service_pack.not_in'  => 'Vui lòng chọn gói dịch vụ',
               'service_pack.min'  => 'Vui lòng chọn gói dịch vụ',
          ]);

          if ($validator->fails()) {
               return response()->json(['error' => $validator->errors()->all()], 422);
          }
          try {
               Order::create([
                    'name' => $request->get('name'),
                    'email' => $request->get('email'),
                    'phone' => $request->get('phone'),
                    'service_pack' => $request->get('service_pack'),
               ]);
          } catch (\Exception $ex) {
               return response()->json(['error' => ['Vui lòng liên hệ PXwebshop để được hỗ trợ'. $ex->getMessage()]], 422);
          }

          return response()->json(['success'=>'Bạn đã đăng ký thàng công. Chúng tôi sẽ liên hệ đến bạn nhanh thôi!'], 201);
     }
}
