@extends('layout')
@section('content')
    <div class="content">
        <div class="container">
            <div class="content-button-row lk-tabs">
                <a href="/" class="content-button-row__button button-rounding button-rounding_med button-rounding_dark">&lt; Вернуться к списку коробок</a>
            </div>
        </div>
        <div class="profile-row">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 visible-xs">
                        <div class="profile-row__user-avatar">
                            <div class="profile-row__user-avatar-wrapper"><img src="{{$user->avatar}}" alt="{{$user->username}}" class="profile-row__user-avatar-img"></div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4">
                        <div class="profile-row__user">
                            <div class="profile-row__user-avatar hidden-xs">
                                <div class="profile-row__user-avatar-wrapper"><img src="{{$user->avatar}}" alt="{{$user->username}}" class="profile-row__user-avatar-img"></div>
                            </div>
                            <div class="profile-row__user-info">
                                <div class="profile-row__user-name">{{$user->username}}</div><br>


                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-8">
                        <div class="profile-row__user-stat-row">
                            <div class="profile-row__user-stat-element"><img src="/build/img/stat-icon__normal-cases.png" alt="normal cases" class="profile-row__user-stat-icon">
                                <div class="profile-row__user-stat-text">
                                    Открыто коробок:
                                    &nbsp;<span>{{$user->open_box}}</span>
                                </div>
                            </div>
<!--                            <div class="profile-row__user-stat-element"><img src="/build/img/stat-icon__normal-cases.png" alt="normal cases" class="profile-row__user-stat-icon">
                                <div class="profile-row__user-stat-text">Пригласил друзей:</div>
                                <div class="profile-row__user-stat-text"><span>{{$user->c}}</span></div>
                            </div>-->
                        </div>
                    </div>
                </div>
                <div class="row cases-history">
                    <div class="col-xs-12">
                        <div class="cases-history_header text-block-black text-block_align_center text-block_fs_b text-block_tf_up text-block_fw_bold">История открытий</div>
                    </div>

                    @foreach($drops as $drop)
                                <div class="col-xs-12 col-sm-4 col-md-3 col-lg-2">
                                    <a href="/box/{{$drop->case}}">
                                    <div class="case-block case-block_gray">
                                        <div class="case-block__img-wrapper">
                                            <div class="case-block__coin-glow"></div>                                           
                                                <img src="{{$drop->image}}" alt="" class="cases-history__coin-img case-block__coin-img">
                                        </div>
                                        <div class="case-block__footer-line">
                                            <div class="case-block__text "><a href="/box/{{$drop->case}}"><span class="case-history__text">{{$drop->name}}</span></a></div>
                                        </div>
                                    </div>
                                    </a>
                                </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@stop