@extends('template')

@section('content')

    <div class="site-wrapper site-wrapper--inner">
        <div class="content-wrapper">
            <header class="main-header">
                <nav class="header-navigation">
                    <a href="{{route('main.page')}}" class="header-logo">
                        GllacyShop
                        <img src="img/logo.svg" alt="GllacyShop">
                    </a>
                    <ul class="user-nav">

                        <li class="user-nav__item user-search">
                        </li>
                    </ul>
                </nav>
                <div class="header-contacts">
                    <p>
                        <span class="header-contacts__worktime">С 10 до 20, ежедневно</span>
                        <span class="header-contacts__tel">8 812 450-25-25</span>
                    </p>
                </div>
            </header>
            <div class="form-group">
                <h1>{{$name}}!</h1>
                <h1>Ваш заказ оформлен!</h1>
            </div>

        </div>
        @include('front.partials.footer')
    </div>

@endsection()