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
    <div><a href="/admin/addContest">Добавить Розыгрыш</a> <span class="divider"></span></div>
    <h3>Розыгрыши</h3>

</div>


<div class="well no-padding">


    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Дата создания</th>
                <th>Дата окончания</th>
                <th>Вещь</th>
                <th>Победитель</th>
                <th>Статус</th>
            </tr>
        </thead>
        <tbody>


            @foreach($contests as $i)
            <tr>
                <td>{{$i->id}}</td>
                <td>{{$i->created_at}}</td>
                <td>{{$i->end_at}}</td>
                <td> @if($i->itemId !=null)
                    <a href="/admin/items/{{$i->itemId}}">{{$i->itemName}}</a>
                    @else 
                    {{$i->itemName}}
                    @endif
                </td>
                <td> @if($i->userId !=null)
                    <a href="/account/{{$i->userId}}">{{$i->userName}}</a>
                    @else 
                    {{$i->userName}}
                    @endif
                </td>
                <td>{{$i->status}}</td>
                <td><a href="/admin/contests/{{$i->id}}">Редактировать</a></td>
                <td> 
                    <form method="post" action="/admin/delete" class="form-horizontal">
                        <input name="id" value="{{$i->id}}"  type="hidden">
                        <input name="item" value="contest"  type="hidden">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <button>Удалить</button>
                    </form>
                </td> 
            </tr>
            @endforeach

        </tbody>
    </table>


    {{$contests->render()}}
    <!-- / Add News: WYSIWYG Edior -->

</div>
<!-- / Add News: Content -->


</div>

</div>


@endsection
