<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        $user = auth()->user();
        
        //welche aufgaben hat der user
        $tasks = $user->tasks()
        ->when($request->filled('q'), function ($query) use($request){
            $term = '%' . $request->input('q') . '%';

            $query->where(function ($q) use ($term) {
                $q->where('title', 'like', $term)->orWhere('description', 'like', $term);
                // dd($q->toRawSql());
            });
        })
        ->latest()->get();

        //Task::where('user_id', $user->id)->latest()->get();

        return view('dashboard', ['user' => $user, 'tasks' => $tasks ]);
    }
}
