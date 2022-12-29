<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Auth;
use App\Http\Requests\User\CreateUserRequest;
use App\Http\Requests\User\UpdateUserRequest;
use App\Http\Requests\LoginRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

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

     public function users(Request $request)
     {
          $users = User::all();

          return view('admin.user.list', compact('users'));
     }

     public function postCreate(CreateUserRequest $request)
     {
          $data = [
               'username'      => $request->input('username'),
               'status'        => $request->input('status'),
               'password'      =>  Hash::make($request->input('password')),
          ];
          try {
               User::create($data);
               Toastr::success('Tạo tài khoản '. $request->input('username') .' thành công');
          } catch(\Exception $e) {
               Toastr::success('Tạo tài khoản thất bại!'. $e->getMessage());
          }

          return redirect()->route('list_users');
     }

     public function edit($id, Request $request)
     {
          $users = User::all();
          $user = User::find($id);

          return view('admin.user.list', compact('users','user'));
     }

     public function postEdit($id, UpdateUserRequest $request)
    {
        $user = User::find($id);
        $user->name = $request->get('name');
        $user->status = $request->input('status');

        if (!Hash::check($request->input('password'), $user->password) && $request->get('check_password') !== 'on') {
          $user->password = trim($request->input('password'));
        }
        try {
          if($user->isDirty()) {
               Toastr::success('Thông tin người dùng đã thay đổi thành công.');
          } else {
               Toastr::warning('Dữ liệu chưa được thay đổi');
          }
          $user->save();
        } catch (\Exception $ex) {
          Toastr::error('Có lỗi khi lưu dữ liệu '. $ex->getMessage());
        }

        return redirect()->route('list_users');
    }

    public function delete($id, Request $request)
    {
        try {
          $user = User::find($id);
          $user->delete();
          Toastr::success("Xóa nhân viên ". $user->username ." thành công!");
        } catch (\Exception $ex) {
          Toastr::error("Vui lòng bỏ cấp quyền. Xóa nhân viên ". $user->username ." thất bại!". $ex->getMessage());
        }

        return redirect()->route('list_users');
    }
}
