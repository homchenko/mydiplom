@extends('template')

@section('content')

    <input type="radio" class="slider-radio" name="slider-radio" id="slide-btn-1" checked>
    <input type="radio" class="slider-radio" name="slider-radio" id="slide-btn-2">
    <input type="radio" class="slider-radio" name="slider-radio" id="slide-btn-3">
    <div class="site-wrapper site-wrapper--main">
      <div class="content-wrapper">
        <header class="main-header">
          <nav class="header-navigation">
            <a class="header-logo" href="{{route('main.page')}}">
              GllacyShop
              <img src="img/logo.svg" alt="GllacyShop">
            </a>
            <ul class="site-nav">
              <li class="site-nav__item">
                <a href="{{route('catalog.page')}}">Каталог</a>
                <div class="site-nav__submenu-container">
                  <ul class="site-nav__submenu">
                    <!--<li class="site-nav__submenu-item site-nav__submenu-item--special"><a href="#">Новинки</a></li>-->

                    @foreach($categories as $categorie)
                      <li class="site-nav__submenu-item"><a href="#">{{$categorie->title}}</a></li>
                    @endforeach

                  </ul>
                </div>
              </li>
              <li class="site-nav__item"><a href="#">Доставка и оплата</a></li>
              <li class="site-nav__item"><a href="#">О Компании</a></li>
            </ul>
            <ul class="user-nav">

              <li class="user-nav__item user-search">
                <!--<a href="#" class="user-search__link">
                  <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="17" height="17" viewBox="0 0 17 17"><path fill="#fff" d="M16.958 15.527L11.75 10.32A6.455 6.455 0 0 0 13 6.5 6.5 6.5 0 1 0 6.5 13a6.465 6.465 0 0 0 3.839-1.263l5.205 5.204 1.414-1.414zM6.5 11C4.019 11 2 8.981 2 6.5S4.019 2 6.5 2 11 4.019 11 6.5 8.981 11 6.5 11z"/></svg>
                  Поиск
                </a>
                <form action="#" method="get" class="user-search__form">
                  <p>
                    <input type="text" name="search" value="" id="search">
                    <label for="search">Что ищем?</label>
                  </p>
                </form>-->
              </li>

              <!--<li class="user-nav__item user-login">
                <a href="{{route('home')}}">
                  <svg class="user-login__icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="21" height="19" viewBox="0 0 21 19"><g fill="#fff"><path d="M6 14.875L12.917 9.5 6 4.125v2.917H-.042v4.917H6z"/><path d="M18 0H5C3.9 0 3 .9 3 2v2h2V2h13v15H5v-2H3v2c0 1.1.9 2 2 2h13c1.1 0 2-.9 2-2V2c0-1.1-.9-2-2-2z"/></g></svg>
                  Вход
                </a>
              </li>-->

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
          <div class="slider">
            <div class="slide" id="slide-1">
              <p class="slide__title">
                Крем-брюле и пломбир с малиновым джемом
              </p>
              <!--<a href="#" class="button slide__button">Давайте оба!</a>-->
            </div>
            <div class="slide" id="slide-2">
              <p class="slide__title">
                Шоколадный пломбир и лимонный сорбет
              </p>
              <!--<a href="#" class="button slide__button">Давайте оба!</a>-->
            </div>
            <div class="slide" id="slide-3">
              <p class="slide__title">
                Пломбир с помадкой и клубничный сорбет
              </p>
              <!--<a href="#" class="button slide__button">Давайте оба!</a>-->
            </div>
            <p class="slider__controls">
              <label for="slide-btn-1">Слайд 1</label>
              <label for="slide-btn-2">Слайд 2</label>
              <label for="slide-btn-3">Слайд 3</label>
            </p>
          </div>
          <section class="offers">
            <h2 class="visually-hidden">Наши спецпредложения:</h2>
            <article class="offers__item offers__item--left">
              <h1>Малинка даром!</h1>
              <p>При покупке 2 кг любого фруктового мороженого,
                добавим в ваш заказ банку малинового варенья
                бесплатно.
              </p>
              <a href="{{route('catalog.page')}}" class="button offers__button">Хочу варенье!</a>
            </article>
            <article class="offers__item offers__item--right">
              <h1>Шоколадки даром!</h1>
              <p>При покупке 2 кг пломбира, добавим в ваш заказ упаковку
                вкуснейшей шоколадной присыпки совершенно бесплатно.
              </p>
              <a href="{{route('catalog.page')}}" class="button offers__button">Хочу шоколадки!</a>
            </article>
          </section>
          <section class="hits">
            <h2 class="visually-hidden">Наши хиты:</h2>
            <ul class="hit-list">
              
              @foreach($products as $product)
                <li class="products-item products-item--hit">
                  <div class="price-and-image">
                    <img src="{{ asset('img') . '/' . $product->image }}" class="products-item__image" alt="" width="267" height="267">
                    <p class="products-item__price">
                      <span class="value">{{ $product->price }} BY </span>
                      <span class="weight"> /кг</span>
                    </p>
                  </div>
                    <p class="products-item__title">
                      <a href="#">{{ $product->title }}</a>
                    </p>
                </li>
              @endforeach
           
            </ul>
          </section>
          <article class="about-us">
            <h1 class="visually-hidden">О нас:</h1>
            <p class="about-us__title">
              Магазин Глейси — это онлайн и офлайн магазин по продаже мороженого
              собственного производства на развес
            </p>
            <ul class="about-us__features-list">
              <li class="about-us__feature about-us__feature--cream">
                Все наше мороженое изготавливается на собственном производстве,
                с использованием современного оборудования и проверенных временем
                технологий.
              </li>
              <li class="about-us__feature about-us__feature--cow">
                Закупка ингредиентов  производится только у проверенных фермерских
                хозяйств и компаний, с которыми нас связывает долговременное
                сотрудничество.
              </li>
              <li class="about-us__feature about-us__feature--leaf">
                Для приготовления мороженого используются настоящие сливки и молоко
                высочайшего качества. Все дополнительные ингредиенты и добавки
                произведены из натурального, экологически чистого сырья.
              </li>
              <li class="about-us__feature about-us__feature--termo">
                Доставка нашего мороженого до заказчиков осуществляется в специальном
                термопаке, который не дает мороженому растаять в пути и позволяет
                сохранить превосходный вкус.
              </li>
            </ul>
          </article>
          <div class="news-and-subscribe">
            <section class="news">
              <h2 class="news__title">Новое в нашем блоге</h2>
              <a href="#" class="news__text">10 способов сервировки фруктовых щербетов к столу</a>
            </section>
            <section class="subscribe">
              <div class="subscribe-container">
                <h2 class="visually-hidden">Хотите подписаться?</h2>
                <p class="subscribe__text">
                  Подпишитесь на нашу сладкую рассылку и будете всегда в курсе всего самого
                  вкусного, что у нас происходит. Обещаем не спамить и не слать всякой ненужной
                  ерунды. Честно =)
                </p>
                <form action="https://echo.htmlacademy.ru" method="post" class="subscribe-form">
                  <input type="email" name="email" id="user-email">
                  <label for="user-email">Электронная почта</label>
                  <input type="submit" class="button subscribe-form__button" name="send" value="Отправить">
                </form>
              </div>
            </section>
          </div>
        </main>
      </div>
      <div class="map">
        <!-- <iframe src="https://yandex.ru/map-widget/v1/-/CBUrrQgKKB" width="1200" height="430"></iframe> -->
        <div class="content-wrapper">
          <div class="contacts">
            <p class="contacts__address">
              <span>Адрес главного офиса и офлайн магазина:</span>
              <b>ул. Большая Конюшенная 19/8, Санкт-Петербург</b>
            </p>
            <p class="contacts__tel">
              <span>Для заказов по телефону:</span>
              <b>8 812 450-25-25</b> (с 10 до 20 ежедневно)
            </p>
            <a href="{{route('feedback')}}" class="button contacts__feedback-btn">Форма обратной связи</a>
          </div>
        </div>
        
      </div>
      @include('front.partials.footer')
    </div>

@endsection()


