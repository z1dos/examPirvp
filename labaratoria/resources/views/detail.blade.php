@extends('layout.base')
@section('title') {{$peoples->surname}} {{$peoples->name}}@endsection
@section('content')
    <div>
            <div>
                <h2>Работник номер-{{$peoples->id}}</h2>
                <h3>Долженость -{{$peoples->post}}</h3>
                <p>Фамилия:{{$peoples->surname}}</p>
                <p>Имя:{{$peoples->name}}</p>
                <p>Отчество {{$peoples->lastname}}</p>
                <p>Пол {{$peoples->sex}}</p>
                <p>Возраст {{$peoples->age}}</p>
                <p>Семейное положение {{$peoples->sem_pol}}</p>
                <p>Дети {{$peoples->deti_est}}</p>
                <p>Ученая степень {{$peoples->academic_degree}}</p>
                <h2><a href="/delete/{{$peoples->id}}">Удалить из базы данных</a></h2>
            </div>
    </div>
@endsection
