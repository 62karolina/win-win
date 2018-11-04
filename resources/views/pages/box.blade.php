@extends('layout')
@section('content')

    <div class="content">
        <div class="container">
            <div class="content-button-row">
                <a href="/" class="content-button-row__button button-rounding button-rounding_med button-rounding_dark">&lt; Вернуться к списку коробок</a>
            </div>
            <div class="top-block__header">
                <div class="top-block__header-line"></div>
                <div class="top-block__header-text">Коробка №{{$case->id}}</div>
                <div class="top-block__header-line"></div>
            </div>
        </div>
        <div class="roulette-line">
            <div class="roulette-wrapper__mid">
                <div class="roulette-wrapper__mid-layer">
                    <div class="roulette-wrapper__mid-line roulette-wrapper__mid-line_top"></div>
                    <div class="roulette-wrapper__mid-line roulette-wrapper__mid-line_bottom"></div>
                </div>
            </div>
            <div class="roulette-wrapper">
                <div class="roulette-wrapper__shadow roulette-wrapper__shadow_left"></div>
                <div class="roulette-wrapper__shadow roulette-wrapper__shadow_right"></div>
                <div class="roulette">
                    @foreach($items as $item)
                        <div class="item">
                            <img src="{{$item->image}}" alt="{{$item->name}}" title="{{$item->name}}">
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="button-line">
            <div class="button-line__button-wrapper">
                <button id="start-roulette" class="button-line__button button-line__start-button">Открыть коробку за <span class="price-box">{{$case->price}}</span><span class="rouble">p</span></button>
                <input type="hidden" value="{{$case->id}}" id="box_id">
            </div>
        </div>
        <div class="container">
            <div class="text-block-black text-block_align_center text-block_fs_b text-block_tf_up text-block_fw_bold">Коробка содержит:</div>
            <div class="row cases-row box-cases-row">

                @if($case->id == 1)
                    @foreach($items as $item)
                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                            <a href="#">
                                <div class="box box_nobg box_gray-box">
                                    <div class="box__bg-layout">
                                        <div class="box__bg-wrapper">
                                            <div class="box__bg box__bg_hov box__bg_red"><img src="/build/img/box__red-hov_min.png" alt="" class="box__bg-img"></div>
                                            <div class="box__bg box__box box__bg_red box__bg-box"><img src="/build/img/box__red-box_min.png" alt="" class="box__bg-img"></div>
                                            <div class="box__bg box__bg_hov box__bg_orange"><img src="/build/img/box__orange-hov_min.png" alt="" class="box__bg-img"></div>
                                            <div class="box__bg box__box box__bg_orange box__bg-box"><img src="/build/img/box__orange-box_min.png" alt="" class="box__bg-img"></div>
                                            <div class="box__bg box__bg_hov box__bg_blue"><img src="/build/img/box__blue-hov_min.png" alt="" class="box__bg-img"></div>
                                            <div class="box__bg box__box box__bg_blue box__bg-box"><img src="/build/img/box__blue-box_min.png" alt="" class="box__bg-img"></div>
                                            <div class="box__bg box__bg_hov box__bg_green"><img src="/build/img/box__green-hov_min.png" alt="" class="box__bg-img"></div>
                                            <div class="box__bg box__box box__bg_green box__bg-box"><img src="/build/img/box__green-box_min.png" alt="" class="box__bg-img"></div>
                                            <div class="box__bg box__bg_hov box__bg_gray"><img src="/build/img/box__gray-hov_min.png" alt="" class="box__bg-img"></div>
                                            <div class="box__bg box__box box__bg_gray box__bg-box"><img src="/build/img/box__gray-box_min.png" alt="" class="box__bg-img"></div>
                                        </div>
                                    </div>
                                    <div class="box__img-wrapper">
                                        <div class="box__header-line">
                                            <div class="box__name">{{$item->name}}</div>
                                        </div>
                                        <img  src="{{$item->image}}" alt="{{$item->name}}" title="{{$item->name}} ({{$item->price}} руб. - цена продажи)" class="box__img">
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                @endif

                @if($case->id == 2)
                        @foreach($items as $item)
                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                            <a href="#">
                                <div class="box box_nobg box_green-box">
                                    <div class="box__bg-layout">
                                        <div class="box__bg-wrapper">
                                            <div class="box__bg box__bg_hov box__bg_red"><img src="/build/img/box__red-hov_min.png" alt="" class="box__bg-img"></div>
                                            <div class="box__bg box__box box__bg_red box__bg-box"><img src="/build/img/box__red-box_min.png" alt="" class="box__bg-img"></div>
                                            <div class="box__bg box__bg_hov box__bg_orange"><img src="/build/img/box__orange-hov_min.png" alt="" class="box__bg-img"></div>
                                            <div class="box__bg box__box box__bg_orange box__bg-box"><img src="/build/img/box__orange-box_min.png" alt="" class="box__bg-img"></div>
                                            <div class="box__bg box__bg_hov box__bg_blue"><img src="/build/img/box__blue-hov_min.png" alt="" class="box__bg-img"></div>
                                            <div class="box__bg box__box box__bg_blue box__bg-box"><img src="/build/img/box__blue-box_min.png" alt="" class="box__bg-img"></div>
                                            <div class="box__bg box__bg_hov box__bg_green"><img src="/build/img/box__green-hov_min.png" alt="" class="box__bg-img"></div>
                                            <div class="box__bg box__box box__bg_green box__bg-box"><img src="/build/img/box__green-box_min.png" alt="" class="box__bg-img"></div>
                                            <div class="box__bg box__bg_hov box__bg_gray"><img src="/build/img/box__gray-hov_min.png" alt="" class="box__bg-img"></div>
                                            <div class="box__bg box__box box__bg_gray box__bg-box"><img src="/build/img/box__gray-box_min.png" alt="" class="box__bg-img"></div>
                                        </div>
                                    </div>
                                    <div class="box__header-wrapper">
                                        <div class="box__header-line">
                                            <div class="box__name">{{$item->name}}</div>
                                        </div>
                                    </div>
                                    <div class="box__img-wrapper">
                                        <img src="{{$item->image}}" alt="{{$item->name}}" title="{{$item->name}} ({{$item->price}} руб. - цена продажи)" class="box__img">
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                @endif

                @if($case->id == 3)
                        @foreach($items as $item)
                            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                                <a href="#">
                                    <div class="box box_nobg box_red-box">
                                        <div class="box__bg-layout">
                                            <div class="box__bg-wrapper">
                                                <div class="box__bg box__bg_hov box__bg_red"><img src="/build/img/box__red-hov_min.png" alt="" class="box__bg-img"></div>
                                                <div class="box__bg box__box box__bg_red box__bg-box"><img src="/build/img/box__red-box_min.png" alt="" class="box__bg-img"></div>
                                                <div class="box__bg box__bg_hov box__bg_orange"><img src="/build/img/box__orange-hov_min.png" alt="" class="box__bg-img"></div>
                                                <div class="box__bg box__box box__bg_orange box__bg-box"><img src="/build/img/box__orange-box_min.png" alt="" class="box__bg-img"></div>
                                                <div class="box__bg box__bg_hov box__bg_blue"><img src="/build/img/box__blue-hov_min.png" alt="" class="box__bg-img"></div>
                                                <div class="box__bg box__box box__bg_blue box__bg-box"><img src="/build/img/box__blue-box_min.png" alt="" class="box__bg-img"></div>
                                                <div class="box__bg box__bg_hov box__bg_green"><img src="/build/img/box__green-hov_min.png" alt="" class="box__bg-img"></div>
                                                <div class="box__bg box__box box__bg_green box__bg-box"><img src="/build/img/box__green-box_min.png" alt="" class="box__bg-img"></div>
                                                <div class="box__bg box__bg_hov box__bg_gray"><img src="/build/img/box__gray-hov_min.png" alt="" class="box__bg-img"></div>
                                                <div class="box__bg box__box box__bg_gray box__bg-box"><img src="/build/img/box__gray-box_min.png" alt="" class="box__bg-img"></div>
                                            </div>
                                        </div>
                                        <div class="box__header-wrapper">
                                            <div class="box__header-line">
                                                <div class="box__name">{{$item->name}}</div>
                                            </div>
                                        </div>
                                        <div class="box__img-wrapper">
                                            <img src="{{$item->image}}" alt="{{$item->name}}" title="{{$item->name}} ({{$item->price}} руб. - цена продажи)" class="box__img">
                                        </div>
                                    </div>
                                </a>
                            </div>

                        @endforeach
                @endif
            </div>
        </div>
    </div>
@stop