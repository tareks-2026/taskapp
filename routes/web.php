<?php

use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function() {
//     return view('welcome');
// });
Route::view('/', 'welcome')->name('welcome'); // Kurzschreibform

Route::get('/tasks', [TaskController::class, 'index'])->name('tasks.index');

Route::get('/tasks/{task}', [TaskController::class,'show']);