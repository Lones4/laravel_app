<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

Route::get('/', function () {
    return redirect()->route('tasks.index'); // Redirect homepage to Task Manager
});

// Resource routes for Task CRUD
Route::resource('tasks', TaskController::class);
