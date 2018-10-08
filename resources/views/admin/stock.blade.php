@extends('admin.layout')

@section('content')



    <div class="top-bar">
        <h3>Новый предмет</h3>

    </div>



    <div class="well no-padding">

        {!! Form::open(array('url'=>'/admin/stock','method'=>'POST', 'files'=>true)) !!}
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <!-- Forms: Normal input field -->
            <div class="control-group">
                <label class="control-label" for="inputNormal">Key через запятую (will add stock to that case and item that is selected) </label>
                <input type="file" name="keys" class="form-control" id="keys">
            </div>


            <div class="control-group">
                <label class="control-label" for="inputNormal">Case</label>
                <select class="input-block-level" name="case" style="margin-left:30px;">
                    <option value="0">Default(main page)</option>
                    @foreach($cases as $case)
                        <option value="{{$case->id}}">{{$case->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="control-group">
                <label class="control-label" for="inputNormal">Game</label>
                <select class="input-block-level" name="game" style="margin-left:30px;">
                    @foreach($items as $item)
                        <option value="{{$item->name}}">{{$item->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="control-group">
                <label class="control-label" for="inputNormal">Type</label>
                <select class="input-block-level" name="type" style="margin-left:30px;">
                    <option value="def">Default</option>
                    <option value="random">Random</option>
                </select>
            </div>
            <!-- / Forms: Form Textarea -->


            <!-- Forms: Form Actions -->
            <div class="form-actions">
                <button type="submit" class="btn btn-primary">Сохранить</button>

            </div>
            <!-- / Forms: Form Actions -->

    {!! Form::close() !!}
        <!-- / Forms: Form -->


        <!-- / Add News: WYSIWYG Edior -->

    </div>
    <!-- / Add News: Content -->




    </div>

    </div>

@endsection
