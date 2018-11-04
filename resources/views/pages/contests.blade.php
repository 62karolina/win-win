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
                                         <form method="post" action="/pages/login">
                                             <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                 <div class="form-actions">
                                                     <button type="submit" class="btn btn-contests" data-toggle="register">Авторизация</button>
                                                 </div>
                                          </form>
                                        @else

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

@stop