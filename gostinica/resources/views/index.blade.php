@extends('layout/base')
@section('title') Номера @endsection
@section('content')
    <h2>Свободные номера</h2>
    @foreach($rooms as $room)
        <li><a href="detail/{{$room->id}}">{{$room->number}}</a></li>
    @endforeach<h2>Занятые номера</h2>
    @foreach($roomsNf as $roomsNfe)
        <li><a href="detail/{{$roomsNfe->id}}">{{$roomsNfe->number}}</a></li>
    @endforeach
@endsection
