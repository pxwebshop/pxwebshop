@section('title','ບົດຄວາມ')
@section('description','lao smart tech ມີຄວາມຊ່ຽວຊານໃນການສະຫນອງການແກ້ໄຂເຕັກໂນໂລຢີຂໍ້ມູນຂ່າວສານ ແລະ ການອອກແບບເວັບໄຊ, ໂປຣແກຣມ, ໂລໂກ, ແບນເນີ, ເຄືອຂ່າຍ ແລະ ຈັດຝຶກອົບຮົມ')
@section('keywords','lao smart tech, ອອກແບບເວັບໄຊ, ອອກແບບເວັບໄຊ, ສ້າງເວັບໄຊ, ຂຽນເວັບໄຊ, ພັດທະນາເວັບໄຊ, ອອກແບບໂປຣແກຣມ, ຂຽນໂປຣແກຣມ, ພັດທະນາໂປຣແກຣມ ອອກແບບໂລໂກ, banner, ອອກແບບລະບົບເຄືອຂ່າຍ, ຝຶກອົບຮົມ')
@extends('layouts.template')
@push('css')
    <link rel="stylesheet" href="{{ asset('css/front/jquery.fancybox.min.css')}}" />
@endpush

@section('content')

<main class="p-training">
    <div class="c-box13">
        <div class="c-box13__inner">
            <div class="l-container">
                <h2 class="c-box13__tlt">ບົດຄວາມ</h2>
                <ul class="c-breadcrumb">
                    <li class="c-breadcrumb__item">
                        <a class="c-breadcrumb__link" href="/#home">ໜ້າຫຼັກ</a>
                    </li>
                    <li class="c-breadcrumb__item">
                        <span class="c-breadcrumb__txt">{{$training->title}}</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    
    <section class="p-training1">
        <div class="l-container">
            <h1 class="p-training1__tlt"> {{ $training->title }}</h1>

            <div class="p-training1__content">
                <div class="tabs">
                    <div data-tab class="active"><i class="fa fa-bookmark"></i>Overview</div>
                    <div class="active">
                        {!! $training->content !!}
                    </div>
                </div>
            </div>

            <div class="c-box15">
                <h4 class="c-title3">Hình ảnh đào tạo</h4>
                <ul class="c-box15__inner container">
                    @foreach($sliders as $item)
                        <li class="c-box15__item">
                            <div class="grid-item">
                                <a data-fancybox="gallery" href="{{url('storage/images/training/slide/'.$item->name)}}">
                                    <figure>
                                        <img src="{{url('storage/images/training/slide/'.$item->name)}}" alt="">
                                    </figure>
                                </a>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>

            <div class="c-box15 c-box15--style1">
                <h4 class="c-title3">Bài viết liên quan</h4>
                <ul class="c-box6__inner js-slider">
                    @foreach($trainings as $key => $item)
                        <li class="c-box6__item">
                            <a href="{{route('training_detail', $item->id)}}" class="c-box6__wrap">
                                <figure>
                                    @if($item->featured_image)
                                        <img src=" {{url('storage/images/training/feature/'.$item->featured_image.'')}}" alt="">
                                    @else
                                        <img src="https://placehold.jp/400x300.png" alt="{{$item->title}}">
                                    @endif
                                </figure>
                                <div class="c-box6__info">
                                    @foreach($item->training_category()->get() as $key => $value)
                                        @if($key == 0)
                                            <p class="c-box6__category">{{$value->name}}</p>
                                        @endif
                                    @endforeach
                                    <h4 class="c-box6__tlt">{{$item->title}}</h4>
                                </div>
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </section>
</main>

@endsection

@push('scripts')
    <script>
        jQuery(document).ready(function() {
            jQuery.fancybox.defaults.thumbs.autoStart = true;
        });
    </script>

    <script src="{{ asset('js/front/jquery.fancybox.min.js')}}"></script>
@endpush