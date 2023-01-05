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
                  $fail($attribute.' ລົງທະບຽນສໍາເລັດແລ້ວ.');
               }
            },
         ],
         'phone' => 'required|numeric|min:10',
      ], [
         'name.required'  => 'ກະລຸນາໃສ່ຊື່ ແລະ ນາມສະກຸນ',
         'name.max'  => 'ຊື່ ແລະ ນາມສະກຸນ ຂອງທ່ານຍາວເກີນໄປ',
         'name.min'  => 'ຊື່ ແລະ ນາມສະກຸນ ຂອງທ່ານສັ້ນເກີນໄປ',
         'email.required'  => 'ກະລຸນາໃສ່ທີ່ຢູ່ອີເມວ',
         'email.email'  => 'ທີ່ຢູ່ອີເມວບໍ່ຖືກຕ້ອງ',
         'phone.required'  => 'ກະລຸນາໃສ່ເບີ້ໂທລະສັບ',
         'phone.numeric'  => 'ເບີ້ໂທລະສັບບໍ່ຖືກຕ້ອງ',
         'phone.min'  => 'ເບີ້ໂທລະສັບສັ້ນເກີນໄປ',
      ]);

      try {
         Contact::create($request->all());
      } catch (\Exception $ex) {
         return redirect()->back()->with('error', 'ກະລຸນາຕິດຕໍ່ Lao Smart Tech ເພື່ອຮັບການຊ່ວຍເຫຼືອ'. $ex->getMessage());
      }

      return redirect()->back()->with('success', 'ພວກເຮົາຈະຕິດຕໍ່ຫາທ່ານໃນໄວໆນີ້!');   
   }
}