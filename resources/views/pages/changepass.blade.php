@extends('layout')
@section('content')

<div class="content">
    <div class="container">
        <div class="row dark-card">
            <div class="dark-card address">
                <div class="address__header text-block text-block_align_center text-block_fs_b text-block_tf_up">Восстановление пароля: </div>
                <div class="row">
                    <form method="post" action="/changepass" class="form-horizontal">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div style="margin-left: 25%;" class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                            <div class="text-block text-block_tf_up register__input-header">Логин</div>
                            <div class="input-block">
                                <input required class="input-block__input register__input" name="login" value="" data-error="Необходимо заполнить логин" title="">
                            </div>
                            <div style="margin-top: 15px;" class="address__button-line">
                                <button type="submit" class="register__button button-rounding button-rounding_big button-rounding_long button-rounding_light">Отправить пароль</button>
                            </div>
                        </div>     
                    </form>
                </div>
            </div>    
        </div>
    </div>
</div>
@stop