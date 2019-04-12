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
                    <ul class="site-nav">
                        <li class="site-nav__item site-nav__item--current">
                            <a href="{{route('catalog.page')}}">Каталог</a>
                        </li>
                        <li class="site-nav__item"><a href="#">Доставка и оплата</a></li>
                        <li class="site-nav__item"><a href="#">О Компании</a></li>
                    </ul>
                    <ul class="user-nav">
                        <li class="user-nav__item user-search">
                        <li class="user-nav__item user-basket">
                            <a href="#">
                                <svg class="user-basket__icon" xmlns="http://www.w3.org/2000/svg" width="21" height="20" viewBox="0 0 21 20"><g fill="#fff"><path d="M5.657 2.031L5.422 0H0v2h3.64l1.5 13h13.988l1.699-12.969H5.657zM17.372 13H6.922L5.888 4.031h12.66L17.372 13z"/><circle cx="6.984" cy="18" r="2"/><circle cx="15.984" cy="18" r="2"/></g></svg>
                                Пусто
                            </a>
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

            <main class="main-content">
                <ul class="breadcrumbs">
                    <li class="breadcrumbs__item"><a href="{{route('main.page')}}">Главная</a></li>
                    <li class="breadcrumbs__item"><a href="{{route('catalog.page')}}">Каталог</a></li>
                </ul>
                </section>
            </main>
        </div>

        <div class="container" style="padding-bottom: 60px;">
        @if(Session::has('cart'))
            <!-- https://megakassa.ru -->
                <h2>Вы заказали на сумму: {{ $cart->totalPrice }}</h2>
                <div class="feedback-block">
                    <form action="{{ route('checkout.form') }}" method="POST">
                        {{ csrf_field() }}
                        <input type="text" value="Имя" name="name">
                        <br>
                        <input type="text" value="Телефон" name="phone">
                        <br>
                        <input type="text" value="E-mail" name="email">
                        <input type="submit" value="Заказть">
                    </form>
                </div>
            @else
                <p>Продуктов нет в корзине</p>
            @endif
        </div>

        @include('front.partials.footer')
    </div>

@endsection()


