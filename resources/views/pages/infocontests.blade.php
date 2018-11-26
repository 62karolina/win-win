@extends('layout')
@section('content')
<!-- /infocontest -->

<div class="content">
    <div class="content-button-row">
        <div class="container">
            <a href="/" class="content-button-row__button button-rounding button-rounding_med button-rounding_dark">&lt; Вернуться к списку коробок</a>
        </div>
    </div>
    <div class="help-padge">
        <div class="container">
            <div class="row dark-card">
                <div class="head-xs-12">
                    <div class="help-padge__header text-block text-block_align_center text-block_fs_b text-block_tf_up text-block_fw_bold">Информация о конкурсе &ldquo;{{$contest->name}}&rdquo;</div>
                </div>
                <div class="license_block-xs-12 license_block-sm-12 license_block-md-6 license_block-lg-7 ">
                    <div class="infocontest_image" >
                        <img src="{{$contest->image}}" class="infocontest_imgbox">
                    </div>
                    <div class="contest_info" >
                        Информация
                        <div class="infocontest_info">Цена ставки: {{$contest->ticket_price}} BYN
                            <div class="infocontest_description"> {{$contest->note}}</div>
                        </div>
                    </div>
                    <div class="infocontests_player"> 
                        <div class="contest_info_row">Количество ставок: <span class="players">{{$players}}</span></div>   
                        @if(Auth::guest())
                        <div style = "display:inline-block;" class="header-row__login-button">
                            <button class="button-rounding button-rounding_big button-rounding_light modal-toggle" data-toggle="login">Авторизация</button>
                        </div>
                        @else
                        <div class="contest_info_row">Ваших ставок: <span class="players_tickets">{{$players_tickets}}</span></div>  
                        <div class="contest_info_row contest_info_row_win_rate"> Шанс на победу: <span class="player_win_rate">{{$player_win_rate}}</span>%</div>  
                        <input type="hidden"  value="{{$contest->id}}" id="contest_id">
                        <div class="form-actions">
                            <!--<button type="submit" id="bye-ticket" class="btn btn-contests" >Стоимость ставки {{$contest->ticket_price}} BYN</button>-->
                            <button type="submit" id="bye-ticket" class="btn btn-contests" >Сделать ставку!</button>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@stop