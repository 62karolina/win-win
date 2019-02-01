@extends('layout')
@section('content')
<!-- /contest -->
<div class="cases-line">
    <div class="container">
        <div class="row cases-row box-cases-row">
            <div class="col-md-12 col_md-5_index col-lg-12 col-sm-12_index">
                @foreach($cases as $case)
                <div class="box_sm-12 box_index box_gray-box col-md-4 col-lg-4_index col-xs-12_index col-sm-12_index col_md-5_index">
                    <a href="/box/{{$case->id}}">
                        <div class="row">
                            <div class="box">
                                <div class="box__bg-layout">
                                    <div class="box__bg-wrapper box_bg-wrapper_index">
                                        <img  src="{{$case->image}}" alt="{{$case->name}}" title="" class="box__img__main box__img">


                                        <div class="box__bg box__box box__bg_gray">
                                            <span class="box__price__text text-block-black">{{$case->price}} BYN</span>

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