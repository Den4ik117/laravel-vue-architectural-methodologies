@extends('layouts.app')

@section('content')
    <ul>
        @foreach($user->tasks as $task)
            <li>{{ $task->name }}</li>
        @endforeach
    </ul>
@endsection
