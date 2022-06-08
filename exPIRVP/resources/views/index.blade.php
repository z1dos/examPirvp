@extends('layouts.app')
@section('title')My Todo App @endsection
@section('content')
    <h2>Задачи</h2>
        <div>
            <ul class="list-group">
                @foreach($todosNo as $todoNo)
                    <p>{{$todoNo->id}}){{$todoNo->title}} <a href="details/{{$todoNo->id}}">o</a></p>
                @endforeach
            </ul>
        </div>

    <h2>Выполенные задачи</h2>
        <div>
            <ul class="list-group">
                @foreach($todosDone as $todoDone)
                    <p>{{$todoDone->id}}){{$todoDone->title}} <a href="details/{{$todoDone->id}}">o</a></p>
                @endforeach
            </ul>
        </div>
@endsection
