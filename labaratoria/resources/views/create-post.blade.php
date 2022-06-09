@extends('layout.base')
@section('title') добавление должностей @endsection
@section('content')
        <div class="create-form-post">
            <form action="create-post-form" method="post">
                @csrf
                <label for="title">Название должности</label>
                <input type="text" name="title">
                <input type="submit">
            </form>
        </div>
@endsection
