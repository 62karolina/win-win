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
    <div><a href="/admin/addItem">Добавить Вещь</a> <span class="divider"></span></div>
    <h3>Вещи</h3>

</div>


<div class="well no-padding">


    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Название</th>
                <th>Цена</th>
                <th>Кейс</th>
            </tr>
        </thead>
        <tbody>


            @foreach($cases as $i)


            <tr>
                <td>{{$i->id}} <img src="{{$i->image}}" alt="{{$i->id}}" style="width: 50px;heigth:50px;" class="userpic"></img></td>
                <td>{{$i->name}}</td>
                <td>{{$i->price}}</td>
                <td>{{$i->caseName}}</td>
                <td><a href="/admin/items/{{$i->id}}">Редактировать</a></td>
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
