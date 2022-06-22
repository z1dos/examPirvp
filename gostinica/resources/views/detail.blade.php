@extends('layout/base')
@section('title') Номера {{$room->number}}@endsection
@section('content')
    <h2>Номер №{{$room->number}}</h2>
    <p>Свободно:{{$room->free}}</p>
    @if(!is_null($room->surname))<p>ФИО: {{$room->surname}} {{$room->name}} {{$room->patronymic}}</p>@endif
    @if(!is_null($room->dot_congress))<p>Дата съезда: {{$room->dot_congress}}</p>@endif
    @if($room->free == 'Да')<h2><a href="/storeView/{{$room->id}}">Забронировать</a></h2>@endif
    @if($room->free == 'Нет')<h2><a href="/updateRoom/{{$room->id}}">Освободить номер</a></h2>@endif
@endsection
