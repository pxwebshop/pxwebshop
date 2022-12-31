@section('title','Trang chủ')
@extends('admin.layouts.template')

@section('breadcrumb')

   <h1>TỔNG QUAN DASHBOARD</h1>

   {{ Breadcrumbs::render('home') }}

@endsection

@section('content')

<section class="section dashboard">
   
   <div class="row">

      <!-- Left side columns -->
      <div class="col-lg-8">
        <div class="row">

          <!-- Sales Card -->
          <div class="col-xxl-4 col-md-6">
            <div class="card info-card sales-card">

              <div class="filter">
                <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                  <li class="dropdown-header text-start">
                    <h6>Filter</h6>
                  </li>

                  <li><a class="dropdown-item" href="#">Today</a></li>
                  <li><a class="dropdown-item" href="#">This Month</a></li>
                  <li><a class="dropdown-item" href="#">This Year</a></li>
                </ul>
              </div>

              <div class="card-body">
                <h5 class="card-title">Đơn hàng <span>| Hôm nay</span></h5>

                <div class="d-flex align-items-center">
                  <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-cart"></i>
                  </div>
                  <div class="ps-3">
                    <h6>145</h6>
                    {{-- <span class="text-success small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">increase</span> --}}

                  </div>
                </div>
              </div>

            </div>
          </div><!-- End Sales Card -->

          <!-- Revenue Card -->
          <div class="col-xxl-4 col-md-6">
            <div class="card info-card revenue-card">

              <div class="filter">
                <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                  <li class="dropdown-header text-start">
                    <h6>Filter</h6>
                  </li>

                  <li><a class="dropdown-item" href="#">Today</a></li>
                  <li><a class="dropdown-item" href="#">This Month</a></li>
                  <li><a class="dropdown-item" href="#">This Year</a></li>
                </ul>
              </div>

              <div class="card-body">
                <h5 class="card-title">Doanh thu</h5>

                <div class="d-flex align-items-center">
                  <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-currency-dollar"></i>
                  </div>
                  <div class="ps-3">
                    <h6>$3,264</h6>
                    {{-- <span class="text-success small pt-1 fw-bold">8%</span> <span class="text-muted small pt-2 ps-1">increase</span> --}}

                  </div>
                </div>
              </div>

            </div>
          </div><!-- End Revenue Card -->

          <!-- Customers Card -->
          <div class="col-xxl-4 col-xl-12">

            <div class="card info-card customers-card">

              <div class="filter">
                <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                  <li class="dropdown-header text-start">
                    <h6>Filter</h6>
                  </li>

                  <li><a class="dropdown-item" href="#">Today</a></li>
                  <li><a class="dropdown-item" href="#">This Month</a></li>
                  <li><a class="dropdown-item" href="#">This Year</a></li>
                </ul>
              </div>

              <div class="card-body">
                <h5 class="card-title">Tổng số tài khoản</h5>

                <div class="d-flex align-items-center">
                  <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-people"></i>
                  </div>
                  <div class="ps-3">
                    <h6>{{App\Models\User::count()}}</h6>
                    {{-- <span class="text-danger small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">decrease</span> --}}

                  </div>
                </div>

              </div>
            </div>

          </div><!-- End Customers Card -->

        
          <!-- Recent Sales -->
          <div class="col-12">
            <div class="card recent-sales overflow-auto">

              <div class="card-body">
                <h5 class="card-title">Danh sách đặt hàng</h5>
                <div class="dataTable-wrapper dataTable-loading no-footer sortable searchable fixed-columns">
                   <div class="dataTable-container">
                      <table class="table table-borderless datatable dataTable-table">
                         <thead>
                            <tr>
                               <th scope="col" data-sortable="" style="width: 10.9489%;"><a href="#" class="dataTable-sorter">#</a></th>
                               <th scope="col" data-sortable="" style="width: 23.9659%;"><a href="#" class="dataTable-sorter">Họ tên</a></th>
                               <th scope="col" data-sortable="" style="width: 40.146%;"><a href="#" class="dataTable-sorter">Email</a></th>
                               <th scope="col" data-sortable="" style="width: 9.85401%;"><a href="#" class="dataTable-sorter">SDT</a></th>
                               <th scope="col" data-sortable="" style="width: 15.0852%;"><a href="#" class="dataTable-sorter">Trạng thái</a></th>
                            </tr>
                         </thead>
                         <tbody>
                          @foreach($orders as $key => $item)
                            <tr>
                               <th scope="row"><a href="#">#{{ $key+1 }}</a></th>
                               <td>{{$item->name}}</td>
                               <td><a href="#" class="text-primary">{{$item->email}}</a></td>
                               <td>{{$item->phone}}</td>
                               <td><span class="badge bg-success">{{$item->status}}</span></td>
                            </tr>
                            @endforeach
                         </tbody>
                      </table>
                   </div>
                   <div class="dataTable-bottom">
                      <div class="dataTable-info">Showing 1 to 5 of 5 entries</div>
                      <nav class="dataTable-pagination">
                         <ul class="dataTable-pagination-list"></ul>
                      </nav>
                   </div>
                </div>
             </div>

            </div><!-- End Recent Sales -->

        </div>
      </div><!-- End Left side columns -->
    </div>  
   
</section>

@endsection
