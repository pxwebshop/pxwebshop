
@section('title','Danh sách liên hệ')
@extends('admin.layouts.template')

@section('breadcrumb')

   {{ Breadcrumbs::render('contact') }}

@endsection

@section('content')

<section class="section">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Danh sách liên hệ</h5>

                    <!-- Table with stripped rows -->
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Tên</th>
                                <th scope="col">Email</th>
                                <th scope="col">Điện thoại</th>
                                <th scope="col">Trạng thái</th>
                                <th scope="col">Mô tả</th>
                                <th scope="col">Ngày tạo</th>
                                <th scope="col">Hành động</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach($contacts as $key => $item)
                                <tr>
                                    <td>{{++$key}}</td>
                                    <td>{{$item->name}}</td>
                                    <td>{{$item->email}}</td>
                                    <td>{{$item->phone}}</td>
                                    <td>
                                        @if ($item->status == 1)
                                            <span class="badge rounded-pill bg-success">Đã chấp nhận</span>
                                        @endif
            
                                        @if($item->status == 2)
                                            <span class="badge rounded-pill bg-danger">Huỷ bỏ</span>
                                        @endif
            
                                        @if($item->status == 0)
                                            <span class="badge rounded-pill bg-secondary">Chưa được duyệt</span>
                                        @endif
                                    </td>
                                    <td>{{$item->description}}</td>
                                    <td>{{$item->created_at}}</td>
                                    <td class="text-center">
                                        <a class="btn btn-warning text-white {{ $item->status != 0 ? 'disabled' : '' }}" href="{{route('approve', $item->id) }}">Approve</a>
                                        <a onclick="return confirm(`Bạn có muốn huỷ bỏ liên hệ này không?`);"  href="{{route('cancel_approve', $item->id) }}" class="btn btn-danger {{ $item->status == 1 ? 'disabled' : '' }}">Cancel</button>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </section>

@endsection
