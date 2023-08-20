@extends('layouts.app')

@section('content')
    <form action="{{ route('login') }}" method="POST">
        @csrf

        <label for="email">E-mail:</label>
        <input id="email" type="email" name="email">


        <label for="password">E-mail:</label>
        <input id="password" type="password" name="password">

        <button type="submit">Войти</button>
    </form>
@endsection
