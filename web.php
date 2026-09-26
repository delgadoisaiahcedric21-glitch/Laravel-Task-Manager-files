<?php

use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

Route::get('/', fn () => redirect()->route('tasks.index'));

Route::resource('tasks', TaskController::class)->except(['show']);
Route::patch('/tasks/{task}/toggle-status', [TaskController::class, 'toggleStatus'])
    ->name('tasks.toggleStatus');
