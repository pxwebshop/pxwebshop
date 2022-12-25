
@section('title','Danh sách bài viết')
@extends('admin.layouts.template')

@section('breadcrumb')

   {{ Breadcrumbs::render('blog') }}

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
                        <th scope="col">Slug</th>
                        <th scope="col">Mô tả</th>
                        <th scope="col">Ngày Tạo</th>
                        <th scope="col">Trạng Thái</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($categories as $key => $item)
                        <tr>
                            <th scope="row">{{$key + 1}}</th>
                            <td>{{$item->name}}</td>
                            <td><span class="badge rounded-pill bg-secondary">{{$item->slug}}</span></td>
                            <td>{{$item->description}}</td>
                            <td>{{date('d-m-Y', strtotime($item->created_at))}}</td>
                            <td class="text-center">
                                <a class="btn btn-warning text-white" href="">Sửa</a>
                                <a onclick="return confirm(`Bạn có muốn xóa nhân viên không?`);"  href="" class="btn btn-danger">Xoá</button>
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
                  <h5 class="card-title">Thêm danh mục</h5>
    
                  <!-- Multi Columns Form -->
                  <form class="row g-3" method="post">
                    @csrf
                    <div class="col-md-12">
                      <label for="inputName5" class="form-label">Tên danh mục</label>
                      <input type="text" class="form-control" id="inputName5" value="{{old('name', @$category->name)}}" name="name" placeholder="Nhập tên danh mục">
                      @include('_partials.alert', ['field' => 'name'])
                    </div>
                    <div class="col-12">
                      <label for="inputAddress5" class="form-label">Slug</label>
                      <input type="text" class="form-control" id="inputAddres5s" value="{{old('slug', @$category->slug)}}" name="slug" placeholder="Nhập slug">
                      @include('_partials.alert', ['field' => 'slug'])
                    </div>
                    <div class="col-12">
                        <div class="form-floating">
                            <textarea class="form-control" placeholder="Address" value="{{old('description', @$category->description)}}" name="description" id="floatingTextarea" style="height: 200px;"></textarea>
                            <label for="floatingTextarea">Nhập mô tả</label>
                        </div>
                        @include('_partials.alert', ['field' => 'description'])
                    </div>
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
