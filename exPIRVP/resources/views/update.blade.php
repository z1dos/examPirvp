@extends('layouts.app')
@section('title') Обноваление {{$todos->title}} @endsection
@section('content')
    <h3>Обновление {{$todos->title}}</h3>
    <form action="/update-task/{{$todos->id}}" method="post">
        @csrf
        <label for="title">Название</label>
        <input type="text" value="{{$todos->title}}" name="title">
        <input type="submit">
    </form>
@endsection
