
@section('title','Danh sách người dùng')
@extends('admin.layouts.template')

@section('breadcrumb')

   {{ Breadcrumbs::render('users') }}

@endsection

@section('content')

<section class="section">
    <div class="row">
        <div class="col-lg-7">
            <div class="card">
                <div class="card-body">
                <h5 class="card-title">Danh sách mục</h5>

                <!-- Table with stripped rows -->
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Tên</th>
                        <th scope="col">Username</th>
                        <th scope="col">Trạng thái</th>
                        <th scope="col">Ngày Tạo</th>

                        <th scope="col" class="text-center">
                            @if(\Request::route()->getName() == 'edit_account')
                                <a href="{{route('list_users') }}" type="button" class="btn btn-primary">Thêm</a>
                            @else
                                Trạng Thái
                            @endif
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $key => $item)
                        <tr>
                            <th scope="row">{{$key + 1}}</th>
                            <td>{{$item->name}}</td>
                            <td>{{$item->username}}</td>
                            <td>
                                @if ($item->status == 1)
                                   <span class="badge rounded-pill bg-success">Đang hoạt động</span>
                                @endif
     
                                @if($item->status == 2)
                                   <span class="badge rounded-pill bg-danger">Không hoạt động</span>
                                @endif
     
                                @if($item->status == 0)
                                   <span class="badge rounded-pill bg-secondary">Chưa được duyệt</span>
                                @endif
                            </td>
                            <td>{{date('d-m-Y', strtotime($item->created_at))}}</td>
                            <td class="text-center">
                                @if($item->username != \Auth::user()->username)
                                    <a class="btn btn-warning text-white" href="{{route('edit_account', $item->id) }}">Sửa</a>
                                    <a onclick="return confirm(`Bạn có muốn xóa nhân viên không?`);"  href="{{route('delete_account', $item->id) }}" class="btn btn-danger">Xoá</button>
                                @endif
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                </div>
            </div>
        </div>

        <div class="col-lg-5">
            <div class="card">
                <div class="card-body">
                  <h5 class="card-title">{{\Request()->route()->getName() == 'list_users' ? 'Thêm' : 'Sửa' }} tài khoản</h5>
    
                  <!-- Multi Columns Form -->
                  <form class="row g-3" method="post">
                    @csrf
                    <div class="col-md-12">
                        <label for="inputName5" class="form-label">Nhập tên</label>
                        <input type="text" class="form-control" id="inputName5" value="{{old('name', @$user->name)}}" name="name" placeholder="Nhập tên">
                      </div>
                    <div class="col-md-12">
                      <label for="inputName5" class="form-label">Tên usernname</label>
                      <input type="text" class="form-control" id="inputName5" value="{{old('username', @$user->username)}}" name="username" placeholder="Nhập username">
                      @include('_partials.alert', ['field' => 'username'])
                    </div>
                    <div class="col-12">
                        <label for="yourPassword" class="form-label">Mật khẩu</label>
                        <input placeholder="Nhập mật khẩu" type="password" name="password" class="form-control" id="yourPassword">
                        @include('_partials.alert', ['field' => 'password'])
                     </div>
                     <div class="col-12">
                        <label for="yourPassword1" class="form-label">Nhập lại mật khẩu</label>
                        <input placeholder="Nhập lại mật khẩu" type="password" name="password_confirmation" class="form-control" id="yourPassword1">
                        @include('_partials.alert', ['field' => 'password_confirmation'])
                     </div>
                    <div class="col-12">
                        <label for="yourPassword" class="form-label">Chọn trạng thái tài khoản</label>
                        <select class="form-select" name="status" aria-label="Default select example">
                            <option vlue="">Vui lòng chọn</option>
                            @foreach(App\Models\User::getStatus() as $status)
                                <option
                                    @if($status == 0 && @$user->status == 0)
                                        selected
                                    @endif
                                    @if($status == 1 && @$user->status == 1)
                                        selected
                                    @endif
                                    @if($status == 2 && @$user->status == 2)
                                        selected
                                    @endif

                                    {{ old('status') == $status ? "selected" : "" }}

                                    value="{{$status}}">
                                    @if($status == 1)
                                        Đang hoạt động
                                    @endif
                                    @if($status == 2)
                                        Không hoạt động
                                    @endif
                                    @if($status == 0)
                                        Chưa kích hoạt
                                    @endif
                                </option>
                            @endforeach
                        </select>
                        @include('_partials.alert', ['field' => 'status'])
                    </div>
                    @if(\Request::route()->getName() == 'edit_account')
                        <div class="col-12">
                            <div class="form-check">
                                <input class="form-check-input" name="check_password" type="checkbox" id="flexCheckChecked">
                                <label class="form-check-label" for="flexCheckChecked">
                                    Tôi không muốn thay đổi mật khẩu cũ
                                </label>
                            </div>
                        </div>
                    @endif
                    <div class="text-center">
                      <button type="submit" class="btn btn-primary">Submit</button>
                      <button type="reset" class="btn btn-secondary">Reset</button>
                    </div>
                  </form>
                </div>
            </div>
        </div>
    </div>
  </section>

@endsection
