@extends('layouts.app')

@section('content')
    <tasks
        :tasks='@json($user->tasks)'
    ></tasks>
@endsection
