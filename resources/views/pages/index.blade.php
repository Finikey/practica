@extends('layouts.app')

@section('title', 'Главная страница')

@section('content')
<section class="banner">
    <div class="container">
        <div class="banner_content">
            <div class="banner_left">
                <div class="banner_image">
                    <img src="{{asset('public/assets/images/banner.png')}}" alt="banner" class="banner-img">
                </div>
            </div>
            <div class="banner_right">
                <div class="banner_text">
                    <h1 class="banner_h1">Лучшие чаи только у нас</h1>
                    <p>&nbsp;</p>
                    <h2 class="banner_h2">Мы предлагаем широкий ассортимент чая, привезенного из разных уголков мира. У нас вы найдете классические черные и <span class="sp">зеленые </span>чаи, а также экзотические белые, <span class="ss">желтые</span> и улуны.</h2>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="catalog">
    <div class="container">
        <div class="catalog_content">
            <div class="catalog_top">
                <h3 class="catalog_h3">
                    Выбор экспертов
                </h3>
            </div>
            <div class="catalog_wrapp">
                <div class="catalog_front">
                    @foreach($products as $product)
                        <div class="front_top">
                            <img src="{{$product->getImageUrl()}}" alt="tea" class="front_img">
                            <div class="front_text">
                                <p class="front_p">{{ $product->name }}</p>
                            </div>
                            <div class="front_wr">
                                <div class="wr_text">
                                    <p class="wr_p">{{ $product->price }} ₽</p>
                                </div>
                                <div class="wr_button">
                                    @csrf
                                    <a href="{{ route('index.tovar') }}"><div class="but_wr">
                                        <p class="but_p">+</p>
                                    </div></a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    <div class="front_top">
                        <img src="{{asset('public/assets/images/green.webp')}}" alt="tea" class="front_img">
                        <div class="front_text">
                            <p class="front_p">Чай зеленый Марокканский в пирамидках</p>
                        </div>
                        <div class="front_wr">
                            <div class="wr_text">
                                <p class="wr_p">1000 ₽</p>
                            </div>
                            <div class="wr_button">
                                <a href="{{ route('index.tovar') }}"><div class="but_wr">
                                    <p class="but_p">+</p>
                                </div></a>
                            </div>
                        </div>
                    </div>
                    <div class="front_top">
                        <img src="{{asset('public/assets/images/green.webp')}}" alt="tea" class="front_img">
                        <div class="front_text">
                            <p class="front_p">Чай зеленый Марокканский в пирамидках</p>
                        </div>
                        <div class="front_wr">
                            <div class="wr_text">
                                <p class="wr_p">1000 ₽</p>
                            </div>
                            <div class="wr_button">
                                <a href="{{ route('index.tovar') }}"><div class="but_wr">
                                    <p class="but_p">+</p>
                                </div></a>
                            </div>
                        </div>
                    </div>
                    <div class="front_top">
                        <img src="{{asset('public/assets/images/green.webp')}}" alt="tea" class="front_img">
                        <div class="front_text">
                            <p class="front_p">Чай зеленый Марокканский в пирамидках</p>
                        </div>
                        <div class="front_wr">
                            <div class="wr_text">
                                <p class="wr_p">1000 ₽</p>
                            </div>
                            <div class="wr_button">
                                <a href="{{ route('index.tovar') }}"><div class="but_wr">
                                    <p class="but_p">+</p>
                                </div></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="catalog_bottom">
                <a href="{{ route('index.catalog') }}"><div class="bot_text">
                    <h4 class="h4_bot">Перейти в каталог</h4>
                </div></a>
            </div>
        </div>
    </div>
</section>
@endsection
