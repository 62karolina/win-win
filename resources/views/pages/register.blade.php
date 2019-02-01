@extends('layout')
@section('content')
<script src='https://www.google.com/recaptcha/api.js?hl=ru&theme=dark'></script>
<div class="content">
    <div class="container">
        <div class="row dark-card">
            <div class="dark-card register">
                <div class="register__header text-block text-block_align_center text-block_fs_b text-block_tf_up">Анкета для регистрации: </div>
                <div class="row">
                    @if($user->userExist)
                        <div class="text-block text-block_tf_up register__input-header">Такой пользователь уже есть!!!</div>
                    @endif
                    @if($user->badGoogleCapcha)
                        <div class="text-block text-block_tf_up register__input-header">Проверка на робота не пройдена!</div>
                    @endif
                    <form method="post" action="/register" class="form-horizontal">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div style="margin-left: 25%;" class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                            <div class="text-block text-block_tf_up register__input-header">Фамилия Имя Отчество</div>
                            <div class="input-block">
                                <input required class="input-block__input register__input" name="name" value="{{$user->name}}" data-error="Необходимо заполнить фамилию имя и отчество" title="">
                            </div>
                            <div class="text-block text-block_tf_up register__input-header">Логин</div>
                            <div class="input-block">
                                <input required class="input-block__input register__input" name="login" value="{{$user->login}}" data-error="Необходимо заполнить логин" title="">
                            </div>
                            <div class="text-block text-block_tf_up register__input-header">Email</div>
                            <div class="input-block">
                                <input required class="input-block__input register__input" type="email" name="email" value="{{$user->email}}" data-error="Необходимо заполнить электронную почту" title="">
                            </div>
                            <div class="text-block text-block_tf_up register__input-header">Пароль</div>
                            <div class="input-block">
                                <input required type="password" class="input-block__input register__input" name="password" value="" data-error="Необходимо заполнить пароль" title="">
                            </div>
                            <div class="g-recaptcha" data-theme="dark" data-sitekey="6Le_iI4UAAAAAAhQyAJJ4QdfvWAi5n-bp0tAh2Oz"></div>
                            <div class="address__button-line">
                                <button type="submit" class="register__button button-rounding button-rounding_big button-rounding_long button-rounding_light">Зарегистрироваться</button>
                            </div>
                        </div>     
                    </form>
                </div>
            </div>    
        </div>
    </div>
</div>
@stop