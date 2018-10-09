@extends('admin.layout')

@section('content')



<div class="top-bar">
    <h3>{{$item->name}}</h3>

</div>



<div class="well no-padding">

    <!-- Forms: Form -->
    <form method="post" action="/admin/itemedit" class="form-horizontal">
        <input  name="id" value="{{$item->id}}"  type="hidden">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">



        <!-- Forms: Normal input field -->
        <div class="control-group">
            <label class="control-label" for="inputNormal">Название</label>
            <div class="controls">
                <input type="text" name="name" value="{{$item->name}}" placeholder="..." class="input-block-level">
            </div>
        </div>


        <div class="control-group">
            <label class="control-label" for="inputInline">Цена</label>
            <div class="controls">
                <input type="number" name="price" value="{{$item->price}}" placeholder="..." class="input-block-level">
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="inputInline">Картинка</label>
            <div class="controls">
                <input type="text" name="image" value="{{$item->image}}" placeholder="..." class="input-block-level">
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="inputNormal">Кейс</label>

            <select class="input-block-level" name="case" style="margin-left:30px;">
                @foreach($cases as $case)
                <option value="{{$case->id}}" @if($case->id == $item->case) selected @endif>{{$case->name}}</option>
                @endforeach

            </select>
        </div>
        <div class="form-actions">
            <button type="submit" class="btn btn-primary">Сохранить</button>

        </div>
    </form>
</div>
</div>

</div>

@endsection
