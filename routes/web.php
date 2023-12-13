<?php

use App\Http\Controllers\TodoController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function() {
    return redirect('/todos');
})->middleware('auth');

Route::get('register', [RegisterController::class, 'create'])->middleware('guest');
Route::post('register', [RegisterController::class, 'store'])->middleware('guest');

Route::get('login', [LoginController::class, 'create'])->name('login')->middleware('guest');
Route::post('login', [LoginController::class, 'store'])->middleware('guest');

Route::get('logout', [LoginController::class, 'destroy'])->middleware('auth');

Route::get('todos', [TodoController::class, 'index'])->middleware('auth');
Route::get('todo/create', [TodoController::class, 'create'])->middleware('auth');
Route::get('todo/{todo}', [TodoController::class, 'show'])->middleware('auth');
Route::post('todo', [TodoController::class, 'store'])->middleware('auth');
Route::get('todo/{todo}/edit', [TodoController::class, 'edit'])->middleware('auth');
Route::patch('todo/{todo}', [TodoController::class, 'update'])->middleware('auth');
Route::delete('todo/{todo}', [TodoController::class, 'destroy'])->middleware('auth');
