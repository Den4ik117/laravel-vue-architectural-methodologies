<aside class="aside">
    <a @class(['aside__item', 'active' => request()->routeIs('index')]) href="{{ route('index') }}">Главная</a>

    @guest
        <a @class(['aside__item', 'active' => request()->routeIs('login')]) href="{{ route('login') }}">Вход</a>
        <a @class(['aside__item', 'active' => request()->routeIs('register')]) href="{{ route('register') }}">Регистрация</a>
    @endguest

    <a @class(['aside__item', 'active' => request()->routeIs('tasks.index')]) href="{{ route('tasks.index') }}">ToDo-лист</a>
    <a class="aside__item" href="{{ route('logout') }}">Выйти</a>
</aside>
