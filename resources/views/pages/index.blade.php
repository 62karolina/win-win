@extends('layout')
@section('content')
<!-- /contest -->
<div class="cases-line">
    <div class="container">
        <div class="row cases-row box-cases-row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                @foreach($cases as $case)
                <div class="box box_gray-box" style="display: inline-block">
                    <a href="/box/{{$case->id}}">
                        <div class="row">
                            <div class="col-md-4 col-lg-4 col-xs-12 col-sm-12">
                                <div class="box__bg-layout">
                                    <div class="box__bg-wrapper">
                                        <img  src="{{$case->image}}" alt="{{$case->name}}" title="" class="box__img__main box__img">
                                        <div class="box__bg box__bg_hov box__bg_gray">
                                            <img src="/build/img/box__gray-hov.png" alt="" class="box__bg-img"/>
                                        </div>
                                        <div class="box__bg box__box box__bg_gray">
                                            <span class="box__price__text text-block-black">{{$case->price}} BYN</span>
                                            <img src="/build/img/box__gray-box.png" alt="" class="box__bg-img"/>
                                        </div>
                                    </div>
                                </div>
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