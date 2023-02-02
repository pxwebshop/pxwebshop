
@section('title','Thêm bài viết')
@extends('admin.layouts.template')

@section('breadcrumb')

   {{ Breadcrumbs::render('add_training') }}

@endsection

@section('content')

<section class="section">
    <form action="" method="POST" id="formId" enctype="multipart/form-data">
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
                <div class="card mb-1">
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
                                        <input class="form-control" type="file" onchange="preview()" name="featured_image" accept="image/png, image/gif, image/jpeg"  id="formFile">
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
                    <button type="submit" id="submit" class="btn btn-primary">{{ \Request::route()->getName() == 'edit_training' ? 'Cập nhật' : 'Lưu'}} bài viết</button>
                </div>
            </div>

            <div class="col-lg-9">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title pb-0">Chọn danh sách ảnh training</h5>
                        <div class="upload__box">
                            <div class="upload__btn-box">
                              <label class="upload__btn">
                                <span>Upload images</span>
                                <input type="file" name="images[]" accept="image/png, image/gif, image/jpeg"  multiple="" data-max_length="20" class="upload__inputfile">
                              </label>
                            </div>

                            <div class="upload__img-wrap">
                                @if(@$training && $training->image())
                                    @foreach(@$training->image()->get() as $item)
                                        <div class="upload__img-box">
                                            <div data-file="{{$item->name}}" class="img-bg" style='background-image: url("{{ url('storage/images/training/slide/'.$item->name) }}")'>
                                                <div class="upload__img-close"></div>
                                            </div>
                                        </div>
                                    @endforeach
                                @endif
                            </div>
                            <input type="hidden" name="remove_file" id="remove_file">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</section>

@endsection
@push('css')
<style>
    .upload__inputfile {
        width: 0.1px;
        height: 0.1px;
        opacity: 0;
        overflow: hidden;
        position: absolute;
        z-index: -1;
    }
    .upload__btn {
        display: inline-block;
        font-weight: 600;
        color: #fff;
        text-align: center;
        min-width: 116px;
        padding: 5px;
        transition: all 0.3s ease;
        cursor: pointer;
        border: 2px solid;
        background-color: #4045ba;
        border-color: #4045ba;
        border-radius: 10px;
        line-height: 26px;
        font-size: 14px;
    }
    .upload__btn:hover {
        background-color: unset;
        color: #4045ba;
        transition: all 0.3s ease;
    }
    .upload__btn-box {
        margin-bottom: 10px;
    }
    .upload__img-wrap {
        display: flex;
        flex-wrap: wrap;
        margin: 0 -10px;
    }
    .upload__img-box {
        width: 200px;
        padding: 0 10px;
        margin-bottom: 12px;
    }
    .upload__img-close {
        width: 24px;
        height: 24px;
        border-radius: 50%;
        background-color: rgba(0, 0, 0, 0.5);
        position: absolute;
        top: 10px;
        right: 10px;
        text-align: center;
        line-height: 24px;
        z-index: 1;
        cursor: pointer;
    }
    .upload__img-close:after {
        content: "✖";
        font-size: 14px;
        color: white;
    }

    .img-bg {
        background-repeat: no-repeat;
        background-position: center;
        background-size: cover;
        position: relative;
        padding-bottom: 100%;
    }

</style>
@endpush

@push('scripts')

<script>
    // function submitDetailsForm() {
       
    //     return;
    //     // $("#form").submit();
    // }

    jQuery(document).ready(function () {
        ImgUpload();
    });

    function ImgUpload() {
        var imgWrap = "";
        var imgArray = [];

        $('.upload__inputfile').each(function () {
            $(this).on('change', function (e) {
            imgWrap = $(this).closest('.upload__box').find('.upload__img-wrap');
            var maxLength = $(this).attr('data-max_length');

            var files = e.target.files;
            var filesArr = Array.prototype.slice.call(files);
            var iterator = 0;
            filesArr.forEach(function (f, index) {

                if (!f.type.match('image.*')) {
                    return;
                }

                if (imgArray.length > maxLength) {
                    return false
                } else {
                    var len = 0;
                    for (var i = 0; i < imgArray.length; i++) {
                        if (imgArray[i] !== undefined) {
                            len++;
                        }
                    }
                    if (len > maxLength) {
                        return false;
                    } else {
                        imgArray.push(f);

                        var reader = new FileReader();
                        reader.onload = function (e) {
                            var html = "<div class='upload__img-box'><div style='background-image: url(" + e.target.result + ")' data-number='" + $(".upload__img-close").length + "' data-file='" + f.name + "' class='img-bg'><div class='upload__img-close'></div></div></div>";
                            imgWrap.append(html);
                            iterator++;
                        }
                        reader.readAsDataURL(f);
                        }
                    }
                });
            });
        });

        $('body').on('click', ".upload__img-close", function (e) {
            var file = $(this).parent().data("file");
            for (var i = 0; i < imgArray.length; i++) {
                if (imgArray[i].name === file) {
                    imgArray.splice(i, 1);
                        break;
                }
            }
            $(this).parent().parent().remove();
        });
    }

    $("#formId").submit(function (e) {
        let file = "";
        $('.upload__img-box').each(function() {
            file = file + ',' + $(this).children().data('file');
        });
        $("#remove_file").val(file);
    });

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
