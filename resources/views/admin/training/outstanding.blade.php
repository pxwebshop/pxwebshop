
@section('title','Danh sách được chọn')
@extends('admin.layouts.template')

@section('breadcrumb')

   {{ Breadcrumbs::render('training_outstanding') }}

@endsection

@section('content')

<section class="section">
    <div class="row">
      <div class="col-lg-10">
       <form action="" method="post">
        @csrf 
            <div class="card">
                <div class="card-body pb-2">
                <h5 class="card-title">Danh sách nổi bật</h5>
                    <div class="row">
                        <div class="col-md-6">
                            <input type="text" class="form-control" placeholder="Tìm kiếm bài viết" name="search">
                        </div>
                        <div class="col-md-6 ps-1">
                            <select id="inputState" class="form-select">
                                <option selected="">Chọn danh mục</option>
                                @foreach($categories as $item)
                                    <option value="{{$item->id}}">{{ \Illuminate\Support\Str::limit($item->name, 50, '...') }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="row mt-1">
                        <div class="col-md-6">
                            <div id="blog-show" class="form-control">
                                <ul class="c-list1">
                                    @foreach($data as $item)
                                        <li data-id="{{$item->id}}" class="c-list1__txt">{{ \Illuminate\Support\Str::limit($item->title, 50, '...') }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6 ps-1">
                            <div id="blog-choose" class="form-control">
                                <ul class="c-list1">
                                    @foreach($outstanding as $item)
                                        <li data-id="{{$item->id}}" class="c-list1__txt">{{ \Illuminate\Support\Str::limit($item->title, 50, '...') }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <button type="button" class="btn btn-primary is-save">Lưu</button>
            </div>
            <input type="hidden" name="training-outstanding-choose" value="{{ json_encode($ids) }}">
       </form>
      </div>
    </div>
  </section>

@endsection

@push('scripts')
    <script type="text/javascript">
        $(document).ready(function() {
            $(document).on('click', '#blog-show .c-list1__txt', function() {
                let item = $(this).clone()[0].outerHTML;
                $(this).remove();
                $("#blog-choose .c-list1").append(item);
            });

            $(document).on('click', '#blog-choose .c-list1__txt', function() {
                let item = $(this).clone()[0].outerHTML;
                $(this).remove();
                $("#blog-show .c-list1").append(item);
            }) ;

            $(".is-save").click(function (e) {
                e.preventDefault();
                let data = [];
                $( "#blog-choose .c-list1 li" ).each(function() {
                    let id = $(this).data('id');
                    data.push(id);
                });

                var input = `<input type="hidden" name="training-outstanding" value="${JSON.stringify( data )}">`;
                $('form').append(input);
                $('form').submit();
            });
        });
    </script>
@endpush