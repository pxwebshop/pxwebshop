@section('title','Pxwebshop Blog')
@extends('layouts.template')

@section('content')

<main class="p-blog">
    <div class="c-box13">
        <div class="c-box13__inner">
            <div class="l-container">
                <h2 class="c-box13__tlt">Bài Viết</h2>
                <ul class="c-breadcrumb">
                    <li class="c-breadcrumb__item">
                        <a class="c-breadcrumb__link" href="#home">Trang chủ</a>
                    </li>
                    <li class="c-breadcrumb__item">
                        <a class="c-breadcrumb__link" href="#blog">Bài Viết</a>
                    </li>
                    <li class="c-breadcrumb__item">
                        <span class="c-breadcrumb__txt">{{$blog->title}}</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <section class="p-blog1">
        <div class="l-content">
            <h1>{{$blog->title}}</h1>
            {!! $blog->content !!}
        </div>
    </section>
</main>
@endsection
