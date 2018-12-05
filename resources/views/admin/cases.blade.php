@extends('admin.layout')

@section('content')


<style>td {
        white-space: nowrap;
        word-wrap: normal;
        overflow: hidden;
        text-overflow: ellipsis;
        max-width: 100px;
    }</style>


<div class="top-bar">
    <div><a href="/admin/addCase">Добавить Кейс</a> <span class="divider"></span></div>
    <h3>Кейсы</h3>

</div>


<div class="well no-padding">


    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Price</th>
                <th>Type</th>
            </tr>
        </thead>
        <tbody>


            @foreach($cases as $i)


            <tr>
                <td>{{$i->id}} <img src="{{$i->image}}" alt="{{$i->id}}" style="width: 50px;heigth:50px;" class="userpic"></img></td>
                <td>{{$i->name}}</td>
                <td>{{$i->price}}</td>
                <td>{{$i->type}}</td>
                <td><a href="/admin/cases/{{$i->id}}">Редактировать</a></td>
                <td> 
                    <form method="post" action="/admin/delete" class="form-horizontal">
                        <input name="id" value="{{$i->id}}"  type="hidden">
                        <input name="item" value="case"  type="hidden">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <button>Удалить</button>
                    </form>
                </td> 
            </tr>
            @endforeach


        </tbody>
    </table>


    {{$cases->render()}}
    <!-- / Add News: WYSIWYG Edior -->

</div>
<!-- / Add News: Content -->


</div>

</div>


@endsection
