@section('title','Bài viết')
@extends('layouts.template')

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
                {!! $blog->content !!}
            </div>
            <div class="l-container1__slidebar">
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
    </section>
</main>
@endsection
