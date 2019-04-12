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
                        <li class="site-nav__item">
                            <a href="{{route('catalog.page')}}">Каталог</a>
                            <div class="site-nav__submenu-container">
                                <!--<ul class="site-nav__submenu">
                                    <!--<li class="site-nav__submenu-item site-nav__submenu-item--special"><a href="#">Новинки</a></li>

                                </ul>-->
                            </div>
                        </li>
                        <li class="site-nav__item"><a href="">Доставка и оплата</a></li>
                        <li class="site-nav__item"><a href="#">О Компании</a></li>
                    </ul>
                    <ul class="user-nav">

                        <li class="user-nav__item user-search">
                        </li>

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


        </div>

        <div class="content">
            <div class="row">
                <div class="col-md-12" >

                    {!! Form::open(array('action' => 'MailController@sendmail', 'method' => 'POST', 'id' => 'fom')) !!}
                    <div class="form-group">
                        {{ Form::label('name', 'Введите ваше имя') }}
                        {{ Form::text('name', null, ['class' =>'form-control', 'id' => 'name']) }}
                    </div>

                    <div class="form-group">
                        {{ Form::label('email', 'Введите ваш email') }}
                        {{ Form::text('email', null, ['class' =>'form-control', 'id' => 'email']) }}
                    </div>

                    <div class="form-group">
                        {{ Form::label('message', 'Ваше сообщение') }}
                        {{ Form::text('message', null, ['class' =>'form-control', 'id' => 'message']) }}
                    </div>

                    {{ Form::submit('Отправить', ['class' => 'button offers__button', 'id' => 'submit']) }}

                    {!! Form::close() !!}
                    <div id="msg"></div>

                </div>
            </div>
        </div>
        <script>
            $(document).ready(function(){
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $('#button').click(function (e) {
                    e.preventDefault();
                    var name = $('#name').val();
                    var email = $('#email').val();
                    var message = $('#message').val();
                    $.ajax({
                        type: "POST",
                        url: 'sendmail',
                        data: {
                            name: 'name',
                            email: 'email',
                            message: 'message'
                        },
                        success: function(data){
                            $('#msg').text(data.msg);
                            $('#form').hide();
                        }

                    })
                });
            });
        </script>
        @include('front.partials.footer')
    </div>

@endsection()