@extends('admin.layout')

@section('content')



    <div class="top-bar">
        <h3>Deliver #{{$deliver->id}}</h3>
    </div>



    <div class="well no-padding">

        <!-- Forms: Form -->
        <form method="post" action="/admin/vivodsave" class="form-horizontal">
            <input  name="id" value="{{$deliver->id}}"  type="hidden">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">



            <!-- Forms: Normal input field -->
            <div class="control-group">
                <label class="control-label" for="inputNormal">Delivery adress: </label><br><br>
                <ul style="list-style-type: none; ">
                    <li><span style="font-weight: bold;">Фамилия Имя Отчество:</span> {{$deliver->name}}</li>
                    <li><span style="font-weight: bold;">Страна:</span> {{$deliver->country}}</li>
                    <li><span style="font-weight: bold;">Город:</span> {{$deliver->city}}</li>
                    <li><span style="font-weight: bold;">Индекс:</span> {{$deliver->postalcode}}</li>
                    <li><span style="font-weight: bold;">Дом, корпус, строение:</span> {{$deliver->dom}}</li>
                    <li><span style="font-weight: bold;">Квартира / Офис:</span> {{$deliver->kvartira}}</li>
                    <li><span style="font-weight: bold;">Улица:</span> {{$deliver->street}}</li>
                </ul>
            </div>
            <div class="control-group">
                <label class="control-label" for="inputNormal">Delivery items: </label><br><br>
                <ul style="list-style-type: none; ">
                    <li>{{$deliver->item1}}</li>
                    <li>{{$deliver->item2}}</li>
                    <li>{{$deliver->item3}}</li>
                    <li>{{$deliver->item4}}</li>
                    <li>{{$deliver->item5}}</li>
                </ul>
            </div>

            <div class="control-group">
                <label class="control-label" for="inputInline">Tracking number</label>
                <div class="controls">
                    <input type="text" name="tracking" value="" placeholder="..." class="input-block-level">
                </div>
            </div>

            <div class="form-actions">
                <button type="submit" class="btn btn-primary">Сохранить</button>

            </div>
        </form>
    </div>
    </div>

    </div>

@endsection
