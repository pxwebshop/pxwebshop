<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;
use App\Models\Order;
use App\Models\Blog;
use App\Models\Training;
use Carbon\Carbon;
use Brian2694\Toastr\Facades\Toastr;
class HomeController extends Controller
{
     public function index(Request $request)
     {
          $blogs = Blog::with('user')->outstanding()->orderBy('created_at', 'desc')->take(3)->get();
          $training = Training::with('user')->outstanding()->orderBy('created_at', 'desc')->take(5)->get();
          
          return view('index', compact('blogs', 'training'));
     }

     public function contact(Request $request)
     {
          return view('contact');
     }

     public function postForm(Request $request)
     {
          $validator = Validator::make($request->all(), [
               'name'           => 'required|max:100|min:3',
               'email'          => [
                    'required',
                    'email',
                    function ($attribute, $value, $fail) use($request) {
                         if (Order::whereEmail($request->get('email'))->whereDate('created_at', Carbon::today())->exists()) {
                             $fail($attribute.' ລົງທະບຽນສໍາເລັດແລ້ວ.');
                         }
                    },
               ],
               'phone'          => 'required|numeric|min:10',
               'service_pack'   => 'required|numeric|min:0|not_in:0',
               'captcha'        => 'required|captcha'
          ], [
               'name.required'  => 'ກະລຸນາໃສ່ຊື່ ແລະ ນາມສະກຸນ',
               'name.max'  => 'ຊື່ ແລະ ນາມສະກຸນ ຂອງທ່ານຍາວເກີນໄປ',
               'name.min'  => 'ຊື່ ແລະ ນາມສະກຸນ ຂອງທ່ານສັ້ນເກີນໄປ',
               'email.required'  => 'ກະລຸນາໃສ່ທີ່ຢູ່ອີເມວ',
               'email.email'  => 'ທີ່ຢູ່ອີເມວບໍ່ຖືກຕ້ອງ',
               'phone.required'  => 'ກະລຸນາໃສ່ເບີ້ໂທລະສັບ',
               'phone.numeric'  => 'ເບີ້ໂທລະສັບບໍ່ຖືກຕ້ອງ',
               'phone.min'  => 'ເບີ້ໂທລະສັບສັ້ນເກີນໄປ',
               'service_pack.required'  => 'ກະລຸນາເລືອກແພັກເກັດບໍລິການ',
               'service_pack.min'  => 'ກະລຸນາເລືອກແພັກເກັດບໍລິການ',
               'service_pack.not_in'  => 'ກະລຸນາເລືອກແພັກເກັດບໍລິການ',
               'service_pack.min'  => 'ກະລຸນາເລືອກແພັກເກັດບໍລິການ',
               'captcha.required' => 'ຕ້ອງປ້ອນລະຫັດ captcha',
               'captcha.captcha' => 'ລະຫັດ captcha ບໍ່ຖືກຕ້ອງ.'
          ]);

          if ($validator->fails()) {
               return response()->json(['error' => $validator->errors()], 422);
          }
          try {
               Order::create([
                    'name' => $request->get('name'),
                    'email' => $request->get('email'),
                    'phone' => $request->get('phone'),
                    'service_pack' => $request->get('service_pack'),
               ]);
          } catch (\Exception $ex) {
               return response()->json(['error' => ['ກະລຸນາຕິດຕໍ່ Lao Smart Tech ເພື່ອຮັບການຊ່ວຍເຫຼືອ'. $ex->getMessage()]], 422);
          }

          return response()->json(['success'=>'ທ່ານລົງທະບຽນສໍາເລັດແລ້ວ. ພວກເຮົາຈະຕິດຕໍ່ຫາທ່ານໃນໄວໆນີ້!'], 201);
     }

     public function refreshCaptcha()
     {
         return response()->json(['captcha'=> captcha_img()]);
     }
}
