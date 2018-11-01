@extends('layout')
@section('content')

<div class="content">
    <div class="container">
        <div class="row dark-card">
            <div class="dark-card address">
                <div class="address__header text-block text-block_align_center text-block_fs_b text-block_tf_up">Вход: </div>
                <div class="row">
                    @if($userNotFound)
                        <div class="text-block text-block_tf_up register__input-header">Неправильный логин/пароль!</div>
                    @endif
                     @if($passwordEmail)
                        <div class="text-block text-block_tf_up register__input-header">Новый пароль был отправлен на почтовый адрес указнный при регистрации!</div>
                    @endif
                    <form method="post" action="/login" class="form-horizontal">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div style="margin-left: 25%;" class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                            <div class="text-block text-block_tf_up register__input-header">Логин</div>
                            <div class="input-block">
                                <input required class="input-block__input register__input" name="login" value="" data-error="Необходимо заполнить логин" title="">
                            </div>
                            <div class="text-block text-block_tf_up register__input-header">Пароль</div>
                            <div class="input-block">
                                <input required type="password" class="input-block__input register__input" name="password" value="" data-error="Необходимо заполнить пароль" title="">
                                <a href="/changepass">
                                 <div class="nav-line__link  nav-line__link " >
                                     Забыли пароль?
                                 </div>
                             </a>
                            </div>
                            <div style="margin-top: 15px;" class="address__button-line">
                                <button type="submit" class="register__button button-rounding button-rounding_big button-rounding_long button-rounding_light">Войти</button>
                            </div>
                        </div>     
                    </form>
                </div>
            </div>    
        </div>
    </div>
</div>
@stop