@extends('layout.base')
@section('title') Главная страница @endsection
@section('content')
<div>
    @foreach($peoples as $people)
        <div>
            <h2>Работник номер {{$people->id}}</h2>
            <p>Фамилия {{$people->surname}}</p>
            <p>Имя {{$people->name}}</p>
            <p>Отчество {{$people->lastname}}</p>
            <p>Пол {{$people->sex}}</p>
            <p>Возраст {{$people->age}}</p>
            <p>Семейное положение {{$people->sem_pol}}</p>
            <p>Дети {{$people->deti_est}}</p>
            <p>Ученая степень {{$people->academic_degree}}</p>
            <h2><a href="detail/{{$people->id}}">Подробности</a></h2>
        </div>
    @endforeach
</div>
@endsection
