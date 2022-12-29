@section('title','Pxwebshop Blog')
@extends('layouts.template')

@section('content')
<main class="p-blog">
    <div class="c-box10">
        <div class="c-box10__img">
            <figure>
                <img src="/images/banner1.jpg" alt="">
            </figure>
        </div>
        <div class="c-box10__inner">
            <div class="l-container">
                <h1 class="c-box10__tlt">Title Title Title Title Title</h1>
                <p class="c-box10__description">description description description description</p>
                <nav class="c-box10__nav">
                    <ol class="c-box10__breadcrumb">
                        <li class="c-box10__breadcrumb__item"><a href="#">Trang chủ</a></li>
                        <li class="c-box10__breadcrumb__item is-active">Dịch vụ</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    <div class="c-box11">
        <div class="l-container">
            <div class="c-box11__top">
                <div class="c-box11__author">
                    <p class="c-box11__author__txt">Tac gia:</p>
                    <span>Dang ngoc quy</span>
                </div>
                <div class="c-box11__date">
                    <i class="fa fa-clock-o" aria-hidden="true"></i>
                    <span class="c-box11__datePost">2022/10/10</span>
                </div>
            </div>
            <div class="c-box11__content">
                <div class="c-box11__inner">
                    
                    <h1>test test test test test test</h1>
                </div>
                <div class="c-box11__slidebar">
    
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
