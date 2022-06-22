@extends('layout/base')
@section('title') Номер {{$room->number}}@endsection
@section('content')
    <h2>Бронирование</h2>
    @if ($errors->any())
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
    @endif
    <form action="/update/{{$room->id}}" method="post">
        @csrf
        <label for="surname"></label><input type="text" name="surname">
        <label for="name"></label><input type="text" name="name">
        <label for="patronymic"></label><input type="text" name="patronymic">
        <label for="arrival_date"></label><input type="date" name="arrival_date">
        <label for="dot_congress"></label><input type="date" name="dot_congress">
        <input type="submit">
    </form>
@endsection
