@extends('layouts.app')

@section('title', 'товар')

@section('content')

<section class="tovar">
    <div class="container">
        <div class="tovar_content">
            <div class="tovar_left">
                <img src="{{asset('public/assets/images/green.webp')}}" alt="tea" class="tovar_img">
            </div>
            <div class="tovar_right">
                <div class="right_wrapp">
                    <div class="right_name">
                        <h4 class="right_h4">Чай зеленый Марокканский в пирамидках</h4>
                    </div>
                    <div class="right_opis">
                        <h4 class="right_p">Описание</h4>
                        <p class="right_pp">мята, корица, чай зеленый китайский крупнолистовой, бадьян, анис, лимон</p>
                    </div>
                    <div class="right_price">
                        <p class="right_pri">1000 ₽</p>
                        <a href="{{ route('index.index') }}"><div class="right_exit">
                            <p class="exit_p">Вернуться на главную</p>
                        </div></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection