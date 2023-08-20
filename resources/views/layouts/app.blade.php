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

    <main class="main">
        @if ($errors->any())
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif

        @if (session()->has('success'))
            <div>Успешно! {{ session('success') }}</div>
        @endif

        @auth
            Вы авторизованы как: {{ auth()->user()->name }}
        @endauth

        @yield('content')
    </main>

    @include('layouts.footer')
</div>

@stack('scripts')
</body>
</html>
