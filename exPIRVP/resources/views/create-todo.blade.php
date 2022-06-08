@extends('layouts.app')
@section('title')Созадние задачи@endsection
@section('content')
    <h2>Создание заявки</h2>
    <form action="store-add" method="post">
        @csrf
        <label for="title">Название</label>
        <input type="text" name="title">
        <input type="submit">
    </form>
@endsection
