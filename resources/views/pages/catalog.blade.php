@extends('layouts.app')

@section('title', 'Каталог')

@section('content')
    <div>
        <div class="container py-24 flex flex-col gap-12">
            <div class="flex flex-col gap-7">
                <div class="flex flex-col gap-4 border-b border-white border-opacity-25 pb-8">
                    <h1 class="text-5xl">Каталог товаров</h1>
                    <p>Лучшие товары только у нас</p>
                </div>
                <div class="flex items-center gap-7">
                    <a href="{{ route('index.catalog') }}" class="button">Все</a>
                    @foreach($categories as $category)
                        <a href="?category={{ $category->id }}" class="button">{{ $category->name }}</a>
                    @endforeach
                </div>
            </div>
            <div class="grid grid-cols-3 gap-7">
                @foreach($products as $product)
                    <div class="flex flex-col gap-7 border border-white border-opacity-25 rounded">
                        <div class="h-[300px] w-full">
                            <img src="{{ $product->getImageUrl() }}" alt="Изображение" class="h-full w-full object-cover rounded-t">
                        </div>
                        <div class="flex flex-col items-center gap-7 pb-8 text-center">
                            <div class="flex flex-col gap-4">
                                <h3 class="text-xl">{{ $product->name }}</h3>
                                <p>{{ $product->price }} руб.</p>
                            </div>
                            <form action="" method="post">
                                @csrf
                                <a href="{{ route('index.tovar') }}"><button type="" class="button-fill bot_text">В корзину</button></a>
                            </form>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
