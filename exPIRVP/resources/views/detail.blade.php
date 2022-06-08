@extends('layouts.app')
@section('title')Задача {{$todos->title}}@endsection
@section('content')
    <div>
        <p>Название: {{$todos->title}}</p>
        <p>Время создания: {{$todos->created_at}}</p>
        <p>Время обноваления: {{$todos->updated_at}}</p>
        <h3><a href="/delete/{{$todos->id}}">Удалить</a></h3>
        <h3><a href="/done/{{$todos->id}}">Выполенно</a></h3>
        <h3><a href="/update/{{$todos->id}}">Обновить</a></h3>
    </div>
@endsection
