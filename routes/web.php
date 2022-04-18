<?php


use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;


Route::get('/tasks', [TaskController::class, 'index'])->name('index');
Route::post('store', [TaskController::class, 'store'])->name('store');
Route::post('destroy/{id}', [TaskController::class, 'destroy'])->name('destroy');
Route::post('updatedata/{id}', [TaskController::class, 'updatedata'])->name('updatedata');
Route::put('update/{id}', [TaskController::class, 'update'])->name('update');
