@extends('admin.layout')

@section('content')



<div class="top-bar">
    <h3>{{$contest->id}}</h3>

</div>



<div class="well no-padding">

    <!-- Forms: Form -->
    <form method="post" action="/admin/contestedit" class="form-horizontal">
        <input name="id" value="{{$contest->id}}"  type="hidden">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">



        <!-- Forms: Normal input field -->
         <div class="control-group">
            <label class="control-label" for="inputNormal">Дата окончания</label>
            <div class="controls">
                <input type="datetime" required name="end_at" value="{{$contest->end_at}}" placeholder="yyyy-mm-dd hh:ii:ss" class="input-block-level">
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="inputNormal">Цена за ставку</label>
            <div class="controls">
                <input required type="number" name="ticket_price" value="{{$contest->ticket_price}}" placeholder="..." class="input-block-level">
            </div>
        </div>

        <div class="control-group">
            <label class="control-label" for="inputNormal">Вещь</label>
            <select required class="input-block-level" name="item_id" style="margin-left:30px;">
                @foreach($items as $item)
                <option value="{{$item->id}}" @if($item->id == $contest->item_id) selected @endif>{{$item->name}}</option>
                @endforeach
                @if($contest->item_id == null)<option selected></option> @endif
            </select>
        </div>
        <div class="control-group">
            <label class="control-label" for="inputNormal">Победитель</label>
            <select class="input-block-level" name="user_win_id" style="margin-left:30px;">
                @foreach($users as $user)
                <option value="{{$user->id}}" @if($user->id == $contest->user_win_id) selected @endif>{{$user->username}}</option>
                @endforeach
                @if($contest->user_win_id == null)<option selected></option> @endif
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
