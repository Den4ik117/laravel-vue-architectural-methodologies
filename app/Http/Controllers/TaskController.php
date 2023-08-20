<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index(Request $request)
    {
        $user = $request->user();

        $user->load(['tasks']);

        return view('tasks.index', compact(['user']));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string|max:512',
        ]);

        $task = $request->user()->tasks()->create([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
        ]);

        return response()->json(['data' => $task]);
    }
}
