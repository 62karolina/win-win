@extends('layout')
@section('content')
<!-- /contest -->
<div class="cases-line">
    <div class="container">
        <div class="row cases-row box-cases-row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                @foreach($contests as $contest)
                <div class="box box_gray-box" style="display: inline-block">
                <a href="/contests/{{$contest->id}}">
                        <div class="row">
                            <div class="col-md-4 col-lg-4 col-xs-12 col-sm-12">
                                <div class="box__bg-layout">
                                    <div class="box__bg-wrapper">

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