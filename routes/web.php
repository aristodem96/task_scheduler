<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [\App\Http\Controllers\TasksController::class, 'index'])->name('index');
Route::get('add-task', [\App\Http\Controllers\TasksController::class, 'create'])->name('add-task');
Route::post('add', [\App\Http\Controllers\TasksController::class, 'store'])->name('add');
Route::get('update-task/{id}', [\App\Http\Controllers\TasksController::class, 'edit'])->name('update-task');
Route::put('update/{id}', [\App\Http\Controllers\TasksController::class, 'update'])->name('update');
Route::delete('delete/{id}', [\App\Http\Controllers\TasksController::class, 'destroy'])->name('delete');
