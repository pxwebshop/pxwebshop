@section('title','ບົດຄວາມ')
@section('description','lao smart tech ມີຄວາມຊ່ຽວຊານໃນການສະຫນອງການແກ້ໄຂເຕັກໂນໂລຢີຂໍ້ມູນຂ່າວສານ ແລະ ການອອກແບບເວັບໄຊ, ໂປຣແກຣມ, ໂລໂກ, ແບນເນີ, ເຄືອຂ່າຍ ແລະ ຈັດຝຶກອົບຮົມ')
@section('keywords','lao smart tech, ອອກແບບເວັບໄຊ, ອອກແບບເວັບໄຊ, ສ້າງເວັບໄຊ, ຂຽນເວັບໄຊ, ພັດທະນາເວັບໄຊ, ອອກແບບໂປຣແກຣມ, ຂຽນໂປຣແກຣມ, ພັດທະນາໂປຣແກຣມ ອອກແບບໂລໂກ, banner, ອອກແບບລະບົບເຄືອຂ່າຍ, ຝຶກອົບຮົມ')
@extends('layouts.template')
@push('css')
    <link rel="stylesheet" href="{{ asset('css/front/jquery.fancybox.min.css')}}" />
@endpush

@section('content')

<main class="p-blog">
    <div class="c-box13">
        <div class="c-box13__inner">
            <div class="l-container">
                <h2 class="c-box13__tlt">ບົດຄວາມ</h2>
                <ul class="c-breadcrumb">
                    <li class="c-breadcrumb__item">
                        <a class="c-breadcrumb__link" href="/#home">ໜ້າຫຼັກ</a>
                    </li>
                    <li class="c-breadcrumb__item">
                        <a class="c-breadcrumb__link" href="#blog">ບົດຄວາມ</a>
                    </li>
                    <li class="c-breadcrumb__item">
                        <span class="c-breadcrumb__txt">{{$blog->title}}</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <section class="p-blog1">
        <div class="l-container1">
            <div class="l-container1__content">
                <h1>{{$blog->title}}</h1>
                {!! $blog->description !!}

                <div class="js-content">
                    {!! $blog->content !!}
                </div>
            </div>
            <div class="l-container1__slidebar">
               <div class="l-container1__slidebar__content">
                    <div class="c-list11">
                        <h3 class="c-list11__title">ຫົວຂໍ້ຫຼັກ</h3>
                    
                        <div class="c-toc">
                            {!! $toc !!}
                        </div>
                    </div>
                    <div class="c-list11">
                        <h3 class="c-list11__title">ບົດຄວາມຫຼ້າສຸດ</h3>
                        <ul class="c-list11__inner">
                            @foreach($blogs as $item)
                            <li class="c-list11__item">
                                <a class="c-list11__link" href="/blog/{{$item->id}}">
                                    <figure>
                                        <img src="{{url('storage/images/blog/feature/'.$item->featured_image.'')}}" alt="">
                                    </figure>
                                    <p class="c-list11__tlt">{{$item->title}}</p>
                                </a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
               </div>
            </div>
        </div>
    </section>
</main>
@endsection

@push('scripts')
    <script>
        $(document).ready(function() {
            $('.js-content img').each(function( index ) {
                var src = $(this).attr('src');
                let html = `<div class="grid-item">
                    <a data-fancybox="gallery" href="${src}">
                        <figure>
                           ${$(this)[0].outerHTML}
                        </figure>
                    </a>
                </div> `

                $( html ).insertBefore( $(this) );
                $(this).remove();
            });
        });
    </script>
@endpush

@push('scripts')
    <script>
        jQuery(document).ready(function() {
            jQuery.fancybox.defaults.thumbs.autoStart = true;
        });
    </script>

    <script src="{{ asset('js/front/jquery.fancybox.min.js')}}"></script>
@endpush