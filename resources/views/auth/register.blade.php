@extends('layouts.app')

@section('content')
    <form action="{{ route('register') }}" method="POST">
        @csrf

        <label for="name">Имя:</label>
        <input id="name" type="text" name="name" autocomplete="name" autofocus required>

        <label for="email">E-mail:</label>
        <input id="email" type="email" name="email" autocomplete="username" required>

        <label for="password">Пароль:</label>
        <input id="password" type="password" name="password" autocomplete="new-password" required>

        <label for="password_confirmation">Повторите пароль:</label>
        <input id="password_confirmation" type="password" name="password_confirmation" autocomplete="new-password" required>

        <button type="submit">Зарегистрироваться</button>
    </form>
@endsection
