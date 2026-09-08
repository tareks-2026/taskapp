<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::where('done', true)->latest()->paginate(5);
        return view('tasks.index', ['tasks' => $tasks]); //pfadstrukturen mit . nicht mit /
    }

    public function show(Task $task)
    {
        //
        return view('tasks.show', compact('task'));  //return view('tasks.show', ['task' => $task]); 
    }
}
