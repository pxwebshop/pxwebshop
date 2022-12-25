<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Auth;
use App\Http\Requests\LoginRequest;

class UserController extends Controller
{
     const USER_ACTIVED = 1;

     public function login(Request $request)
     {
          return view('login');
     }

     public function postLogin(LoginRequest $request)
     {
          $data = [
               'username' => $request->get('username'),
               'password' => trim($request->get('password')),
               'status' => self::USER_ACTIVED,
          ];

          $remember_me = $request->has('remember') ? true : false;

          if (Auth::attempt($data, $remember_me)) {
               Toastr::success('Đăng nhập vào hệ thống thành công!');

               return redirect()->route('dashboard');
          } else {
               Toastr::error('Tên người dùng hoặc mật khẩu không chính xác!');
               return redirect()->route('login');
          }
          return redirect()->route('home');
     }

     public function logout(Request $request)
     {
          Auth::logout();
          Toastr::success('Đăng xuất thành công!');
          return redirect()->route('login');
     }
}
