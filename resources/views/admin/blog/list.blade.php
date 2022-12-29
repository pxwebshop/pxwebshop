
@section('title','Danh sách bài viết')
@extends('admin.layouts.template')

@section('breadcrumb')

   {{ Breadcrumbs::render('blog') }}

@endsection

@section('content')

<section class="section">
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
              <h5 class="card-title">Danh sách bài viết</h5>

              <!-- Table with stripped rows -->
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Tiêu đề</th>
                    <th scope="col">Danh mục</th>
                    <th scope="col">Trạng Thái</th>
                    <th scope="col">Ngày Tạo</th>
                    <th scope="col">Người Tạo</th>
                    <th scope="col" class="text-center">
                      <a href="{{route('add_blog') }}" type="button" class="btn btn-primary">Thêm</a>
                    </th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($blogs as $key => $item)
                    <tr>
                      <th scope="row">{{$key + 1 }}</th>
                      <td>{{ $item->title }}</td>
                      <td>
                        @foreach( $item->category as $category)
                          <span class="badge bg-primary">{{$category->name;}}</span>
                        @endforeach
                      </td>
                      <td>
                        @if ($item->status == 0 || $item->status == 1)
                          <span class="badge rounded-pill bg-secondary">Chưa được duyệt</span>
                        @endif

                        @if($item->status == 2)
                          <span class="badge rounded-pill bg-success">Đang hoạt động</span>
                        @endif

                        @if($item->status == 3)
                          <span class="badge rounded-pill bg-danger">Đã dừng</span>
                        @endif
                      </td>
                      <td>{{ $item->created_at }}</td>
                      <td>{{ $item->user->name ?: $item->user->username }}</td>
                      <td class="text-center">
                          <a class="btn btn-warning text-white" href="{{route('edit_blog', $item->id) }}">Sửa</a>
                          <a onclick="return confirm(`Bạn có muốn xóa bài viết {{$item->title}} không?`);"  href="{{route('delete_blog', $item->id) }}" class="btn btn-danger">Xoá</button>
                      </td>
                    </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
      </div>
    </div>
  </section>

@endsection
