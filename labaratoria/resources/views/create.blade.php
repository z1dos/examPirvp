@extends('layout.base')
@section('title') Главная страница @endsection
@section('content')
    <div class="create-form">
        <form action="store-action" method="post">
            @csrf

            <div><label for="surname">Фамилия</label><input type="text" name="surname"></div>

            <div><label for="name">Имя</label><input type="text" name="name"></div>

            <div><label for="lastname">Отчество</label><input type="text" name="lastname"></div>

            <div>
                <label for="sex">Пол</label>
                <select name="sex">
                    <option value="Мужской">Мужской</option>
                    <option value="Женский">Женский</option>
                </select>
            </div>

            <div><label for="age">Возраст</label><input type="text" name="age"></div>

            <div>
                <label for="sem_pol">Семейное положение</label>
                <select name="sem_pol">
                    <option>Не замужем / Не женат</option>
                    <option>Замужем / Женат</option>
                    <option>Разведен / Разведена</option>
                    <option>Вдовец / Вдова</option>
                </select>
            </div>
            <div>
                <label for="deti_est">Дети есть?</label>
                <select name="deti_est">
                    <option>Да</option>
                    <option>Нет</option>
                </select>
            </div>
            <div>
                <label for="post">Должность</label>
                <select name="post">
                    @foreach($posts as $post)
                        <option>{{$post->title}}</option>
                    @endforeach
                </select>
            </div>
            <div>
                <label for="academic_degree">Ученая степень</label>
                <select name="academic_degree">
                    <option>бакалавр</option>
                    <option>магистр</option>
                    <option> кандидат наук</option>
                </select>
            </div>

            <input type="submit">
        </form>
    </div>
@endsection
