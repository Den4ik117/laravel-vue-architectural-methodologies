<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index(Request $request)
    {
        $user = $request->user();

        $user->load(['tasks']);

        return view('tasks.index', compact(['user']));
    }
}
