@extends('admin.layout')

@section('content')



<div class="top-bar">
    <h3>Новый Розыгрыш</h3>

</div>



<div class="well no-padding">

    <!-- Forms: Form -->
    <form method="post" action="/admin/addContest" class="form-horizontal">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <!-- Forms: Normal input field -->
        <div class="control-group">
            <label class="control-label" for="inputNormal">Цена за ставку</label>
            <div class="controls">
                <input required type="number" name="ticket_price" value="" placeholder="..." class="input-block-level">
            </div>
        </div>

        <div class="control-group">
            <label class="control-label" for="inputNormal">Вещь</label>
            <select required class="input-block-level" name="item_id" style="margin-left:30px;">
                @foreach($items as $item)
                <option value="{{$item->id}}">{{$item->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="control-group">
            <label class="control-label" for="inputNormal">Победитель</label>
            <select class="input-block-level" name="user_win_id" style="margin-left:30px;">
                <option></option>
                @foreach($users as $user)
                <option value="{{$user->id}}">{{$user->username}}</option>
                @endforeach
            </select>
        </div>
        <!-- / Forms: Form Textarea -->


        <!-- Forms: Form Actions -->
        <div class="form-actions">
            <button type="submit" class="btn btn-primary">Сохранить</button>

        </div>
        <!-- / Forms: Form Actions -->

    </form>
    <!-- / Forms: Form -->


    <!-- / Add News: WYSIWYG Edior -->

</div>
<!-- / Add News: Content -->




</div>

</div>

@endsection
