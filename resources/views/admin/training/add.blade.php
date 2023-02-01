
@section('title','Thêm bài viết')
@extends('admin.layouts.template')

@section('breadcrumb')

   {{ Breadcrumbs::render('add_training') }}

@endsection

@section('content')

<section class="section">
    <form action="" method="post" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-lg-12 mb-2">
                <label class="form-label">Tiêu đề bài viết:</label>
                <textarea name="title" class="form-control" rows="1">{{old('title', @$training->title)}}</textarea>
                @include('_partials.alert', ['field' => 'title'])
            </div>
        </div>
        <div class="row">
            <div class="col-lg-9">
                <div class="card mb-3">
                    <div class="card-body">
                        <h5 class="card-title">Nội dung bài viết:</h5>
                        <textarea name="content" class="form-control my-editor">{!! old('content', @$training->content) !!}</textarea>
                        @include('_partials.alert', ['field' => 'content'])
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card mb-3">
                    <div class="card-body">
                        <div class="accordion accordion-flush" id="accordionFlushExample">
                            <div class="accordion-item">
                              <h2 class="accordion-header" id="flush-headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="true" aria-controls="flush-collapseOne">
                                   <strong>Danh Mục</strong>
                                </button>
                              </h2>
                                <div id="flush-collapseOne" class="accordion-collapse collapse show" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample" style="">
                                    <div class="accordion-body">
                                        <ul class="nav nav-tabs d-flex" id="myTabjustified" role="tablist">
                                            <li class="nav-item flex-fill" role="presentation">
                                            <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-justified" type="button" role="tab" aria-controls="home" aria-selected="true">Tất cả danh mục</button>
                                            </li>
                                        </ul>
                                        <div class="tab-content" id="myTabjustifiedContent">
                                            <div class="tab-pane fade show active" id="home-justified" role="tabpanel" aria-labelledby="home-tab">
                                                <ul class="list-group">
                                                    @foreach(@$categories as $key => $item)
                                                    <li class="list-group-item">
                                                        <div class="form-check">
                                                            @if( \Request::route()->getName() == 'edit_training')
                                                                @php $i = 0; @endphp
                                                                @foreach(@$training->training_category()->get() as $key => $data)
                                                                    @if( $item->id == $data->pivot->category_id)
                                                                        @php $i ++; @endphp
                                                                        <input checked class="form-check-input" name="categories[]" value="{{$item->id}}" type="checkbox" id="gridCheck{{$item->id}}">
                                                                    @endif
                                                                @endforeach

                                                                @if($i == 0)
                                                                    <input class="form-check-input" name="categories[]" value="{{$item->id}}" type="checkbox" id="gridCheck{{$item->id}}">
                                                                @endif
                                                            @else
                                                                <input @if(is_array(old('categories')) && in_array($item->id, old('categories'))) checked @endif class="form-check-input" name="categories[]" value="{{$item->id}}" type="checkbox" id="gridCheck{{$item->id}}">
                                                            @endif

                                                            <label class="form-check-label" for="gridCheck{{$item->id}}">
                                                              {{$item->name}}
                                                            </label>
                                                        </div>
                                                    </li>
                                                    @endforeach
                                                </ul>
                                                @include('_partials.alert', ['field' => 'categories'])
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card mb-3">
                    <div class="card-body">
                        <div class="accordion accordion-flush" id="accordionFlushExample1">
                            <div class="accordion-item">
                              <h2 class="accordion-header" id="flush-headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne1" aria-expanded="true" aria-controls="flush-collapseOne1">
                                   <strong>Hình Ảnh</strong>
                                </button>
                              </h2>
                                <div id="flush-collapseOne1" class="accordion-collapse collapse show" aria-labelledby="flush-headingOne1" data-bs-parent="#accordionFlushExample1" style="">
                                    <div class="accordion-body pb-0">
                                        <label for="formFile" class="form-label">Chọn hình ảnh làm mặc định</label>
                                        <img id="frame" src="{{ @$training->featured_image ? asset('storage/images/training/feature/'. @$training->featured_image) : '' }}" class="img-fluid mb-2" />
                                        <input class="form-control" type="file" onchange="preview()" name="featured_image" accept="image/*" id="formFile">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <label for="inputState" class="form-label">Trạng thái</label>
                <select name="status" id="inputState" class="form-select">
                    @foreach(App\Models\Training::getStatus() as $key => $status)
                        <option {{ ((old("status") == $key || $key == @$training->status ) ? "selected":"") }} value="{{ $key }}">{{ $status }}</option>
                    @endforeach
                </select>
                @include('_partials.alert', ['field' => 'status'])
                
                <div class="mt-2 text-end">
                    <button type="submit" class="btn btn-primary">{{ \Request::route()->getName() == 'edit_training' ? 'Cập nhật' : 'Lưu'}} bài viết</button>
                </div>
            </div>
        </div>
    </form>
</section>

@endsection

@push('scripts')
<script>
    function preview() {
        frame.src = URL.createObjectURL(event.target.files[0]);
    }
</script>    
<script src="https://cdn.tiny.cloud/1/lhwxyg149qglgnunbgvfenwshs508ivnyvqzb9uby3n59ean/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
<script>
  var editor_config = {
    path_absolute : "/",
    selector: 'textarea.my-editor',
    height:700,
    relative_urls: false,
    plugins: [
      "advlist autolink lists link image charmap print preview hr anchor pagebreak",
      "searchreplace wordcount visualblocks visualchars code fullscreen",
      "insertdatetime media nonbreaking save table directionality",
      "emoticons template paste textpattern"
    ],
    toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media",
    file_picker_callback : function(callback, value, meta) {
      var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
      var y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight;

      var cmsURL = editor_config.path_absolute + 'laravel-filemanager?editor=' + meta.fieldname;
      if (meta.filetype == 'image') {
        cmsURL = cmsURL + "&type=Images";
      } else {
        cmsURL = cmsURL + "&type=Files";
      }

      tinyMCE.activeEditor.windowManager.openUrl({
        url : cmsURL,
        title : 'Filemanager',
        width : x * 0.8,
        height : y * 0.8,
        resizable : "yes",
        close_previous : "no",
        onMessage: (api, message) => {
          callback(message.content);
        }
      });
    }
  };

  tinymce.init(editor_config);
</script>
<script>
    tinymce.init({
      selector: '#mytextarea'
    });
</script>
@endpush
