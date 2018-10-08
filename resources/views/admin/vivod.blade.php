@extends('admin.layout')

@section('content')



        <div class="top-bar">
            <h3>Последние запросы на вывод</h3>

        </div>



        <div class="well no-padding">


            <table class="table">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Пользователь</th>
                    <th>Item1</th>
                    <th>Item2</th>
                    <th>Item3</th>
                    <th>Item4</th>
                    <th>Item5</th>
                    <th>Tracking</th>
                </tr>
                </thead>
                <tbody>
                  @foreach($delivers as $b)
                    <tr>
                        <td>{{$b->id}}</td>
                        <td><a href="/account/{{$b->user_id}}">{{$b->name}}</a></td>
                        <td><img src="{{$b->item1}}" style="width:30px;height:30px;"></img></td>
                        <td><img src="{{$b->item2}}" style="width:30px;height:30px;"></img></td>
                        <td><img src="{{$b->item3}}" style="width:30px;height:30px;"></img></td>
                        <td><img src="{{$b->item4}}" style="width:30px;height:30px;"></img></td>
                        <td><img src="{{$b->item5}}" style="width:30px;height:30px;"></img></td>
                        <td><a href="/admin/vivod/{{$b->id}}">Deliver</a></td>
                    </tr>
                  @endforeach
                </tbody>
            </table>
            <!-- / Add News: WYSIWYG Edior -->

        </div>
        <!-- / Add News: Content -->




        </div>

        </div>
@endsection
