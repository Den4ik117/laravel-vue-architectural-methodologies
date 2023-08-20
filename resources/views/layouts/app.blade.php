<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', config('app.name'))</title>
    @yield('head')
    @vite(['resources/scss/app.scss', 'resources/js/app.js'])
</head>
<body>
<div class="wrapper app" v-cloak>
    @include('layouts.header')

    @include('layouts.aside')

    @yield('content')

    @include('layouts.footer')
</div>

@stack('scripts')
</body>
</html>
