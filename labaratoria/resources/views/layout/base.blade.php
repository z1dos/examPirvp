<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ url('css/app.css') }}" type="text/css" rel="stylesheet">
    <title>@yield('title')</title>
</head>

<div class="header-base">
    <h2><a href="/">Главная страница</a></h2>
    <h2><a href="create">Создать заявку</a></h2>
</div>

<div>
    @yield('content')
</div>

</body>
</html>
