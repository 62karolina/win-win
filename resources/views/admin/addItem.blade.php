@extends('admin.layout')

@section('content')



<div class="top-bar">
    <h3>Новый предмет</h3>

</div>



<div class="well no-padding">

    <!-- Forms: Form -->
    <form method="post" action="/admin/addItem" class="form-horizontal">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <!-- Forms: Normal input field -->
        <div class="control-group">
            <label class="control-label" for="inputNormal">Название</label>
            <div class="controls">
                <input type="text" name="name" value="" placeholder="..." class="input-block-level">
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="inputNormal">Цена</label>
            <div class="controls">
                <input type="number" step=".1"name="price" value="" placeholder="..." class="input-block-level">
            </div>
        </div>

        <div class="control-group">
            <label class="control-label" for="inputNormal">Картинка(URL)</label>
            <div class="controls">
                <input type="text" name="image" value="" placeholder="..." class="input-block-level">
            </div>
        </div>

        <div class="control-group">
            <label class="control-label" for="inputNormal">Тип</label>
            <select class="input-block-level" name="type" style="margin-left:30px;">
                <option value="def">Default</option>
            </select>
        </div>
        <div class="control-group">
            <label class="control-label" for="inputNormal">Описание</label>
            <div class="controls">
                <input type="text" name="note" value="" placeholder="..." class="input-block-level">
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="inputNormal">Кейс</label>
            <select class="input-block-level" name="case" style="margin-left:30px;">
                @foreach($cases as $case)
                <option value="{{$case->id}}">{{$case->name}}</option>
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
