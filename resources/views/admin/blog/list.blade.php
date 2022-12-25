
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
                    <th scope="col">Ngày Tạo</th>
                    <th scope="col">Trạng Thái</th>
                    <th scope="col" class="text-center">
                        <a href="" type="button" class="btn btn-primary">Thêm</a>
                    </th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Brandon Jacob</td>
                    <td>Designer</td>
                    <td>
                           <span class="badge rounded-pill bg-success">Đang hoạt động</span>

                           <span class="badge rounded-pill bg-danger">Không hoạt động</span>

                           <span class="badge rounded-pill bg-secondary">Chưa được duyệt</span>
                     </td>
                     <td class="text-center">
                        <a class="btn btn-warning text-white" href="">Sửa</a>
                        <a onclick="return confirm(`Bạn có muốn xóa nhân viên không?`);"  href="" class="btn btn-danger">Xoá</button>
                     </td>
                  </tr>
                </tbody>
              </table>
              <!-- End Table with stripped rows -->

            </div>
          </div>
      </div>
    </div>
  </section>

@endsection
