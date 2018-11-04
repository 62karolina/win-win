@extends('layout')
@section('content')
<!-- /contest -->
<div class="cases-line">
    <div class="container">
        <div class="row cases-row box-cases-row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                @foreach($contests as $contest)
                <a href="/infocontests/{{$contest->id}}">
                    <div class="box box_gray-box" style="display: inline-block">
                        <div class="row">
                            <div class="box_contests box_contests-md-4 box_contest-lg-4 col-xs-12  box_contest-sm-12">
                                <div class="box__bg-layout box__bg-xs-12">
                                     <div class="contest_name">
                                        {{$contest->name}}
                                     </div>
                                     <div class="contest_image">
                                        <img src="{{$contest->image}}" class="contest_imgbox">
                                     </div>
                                     <div class="contest_price">
                                        @if(Auth::guest())
                                        <div style = "display:inline-block;" class="header-row__login-button">
                                            <button class="button-rounding button-rounding_big button-rounding_light modal-toggle" data-toggle="login">Авторизация</button>
                                        </div>
                                        @else
                                           <form method="post" action="/addTicket">
                                              <input type="hidden" name="id" value="{{$contest->id}}" id="contest_id">
                                              <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                 <div class="form-actions">
                                                    <button type="submit" class="btn btn-contests" >Стоимость ставки {{$contest->ticket_price}} BYN</button>
                                                 </div>
                                        </form>
                                        @endif
                                     </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
                @endforeach
            </div>
        </div>
    </div>
</div>

 <!-- additional modals -->



<div id="add-cash" class="modal-window modal-window_size_m">
    <div class="modal-window__header-wrapper">
        <div class="modal-window__header">
            Пополнить &nbsp;<span>баланс</span>
            <div class="modal-window__header-border"></div>
        </div>
        <button class="modal-window__close-button"><img src="/build/img/cross_gray.png" alt="close" class="modal-window__close-button-cross"></button>
    </div>
    <div class="modal-window__element-header text-block text-block_tf_up text-block_align_center">Введите сумму:</div>
    <div class="modal-window__element modal-window__input-block modal-window__element_with-header">
        <div class="input-block modal-window__input-wrapper">
            <input class="input-block__input" value="100" title="">
        </div>
    </div>
    <div class="modal-window__element-header text-block">Выберите платежную систему:</div>
    <div class="modal-window__element modal-window__pay-system-wrapper modal-window__element_with-header">
        <div class="modal-window__pay-system pay-system">
            <div class="modal-window__img-wrapper pay-system__img-wrapper">
                <img src="/build/img/pay-icon_mc-visa_l.png" alt="Банковская карта" title="Банковская карта" data-provider="card" data-currency="10" class="pay-system__img">
            </div>
            <div class="modal-window__img-wrapper pay-system__img-wrapper">
                <img src="/build/img/pay-icon_ym_l.png" alt="Яндекс.Деньги" title="Яндекс.Деньги" data-provider="yadi" data-currency="21" class="pay-system__img">
            </div>
            <div class="modal-window__img-wrapper pay-system__img-wrapper">
                <img src="/build/img/pay-icon_qiwi_l.png" alt="Qiwi" title="Qiwi" data-provider="qiwi" data-currency="20" class="pay-system__img">
            </div>
            <div class="modal-window__img-wrapper pay-system__img-wrapper">
                <img src="/build/img/pay-icon_mts_l.png" alt="МТС" title="МТС" data-provider="mts" data-currency="40" class="pay-system__img">
            </div>
            <div class="modal-window__img-wrapper pay-system__img-wrapper">
                <img src="/build/img/pay-icon_mf_l.png" alt="Мегафон" title="Мегафон" data-provider="mega" data-currency="43" class="pay-system__img">
            </div>
            <div class="modal-window__img-wrapper pay-system__img-wrapper">
                <img src="/build/img/pay-icon_tele2_l.png" alt="Tele2" title="Tele2" data-provider="tele2" data-currency="41" class="pay-system__img">
            </div>
            <div class="modal-window__img-wrapper pay-system__img-wrapper">
                <img src="/build/img/pay-icon_bee_l.png" alt="Beeline" title="Beeline" data-provider="beeline" data-currency="42" class="pay-system__img">
            </div>
        </div>
    </div>
    <div class="modal-window__element modal-window__button-block">
        <button id="btn-cash-in" class="modal-window__button button-rounding button-rounding_big button-rounding_long button-rounding_light">Пополнить</button>
    </div>
</div>

@stop