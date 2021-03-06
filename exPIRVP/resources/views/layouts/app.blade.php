<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
</head>

<body>

<nav class="navbar navbar-light bg-light">
    <div class="container">
        <a href="/"><span class="navbar-brand mb-0 h1">Todo</span></a>
        <a href="/create"><span class="btn btn-primary">Create Todo</span></a>
    </div>
</nav>

@if(session()->has('success'))
    <div>
        {{ session()->get('success') }}
    </div>
@endif

<div class="container">

    @yield('content')

</div>

</body>

</html>
