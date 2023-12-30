<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\TodoController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
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
    return redirect()->route('todos.index');
})->middleware('auth');

// Auth
Route::middleware('guest')->group(function () {
    Route::get('register', [RegisterController::class, 'create'])->name('register');
    Route::post('register', [RegisterController::class, 'store'])->name('register');
    Route::get('login', [LoginController::class, 'create'])->name('login');
    Route::post('login', [LoginController::class, 'store'])->name('login');
});

Route::get('logout', [LoginController::class, 'destroy'])->middleware('auth')->name('logout');

// Todos
Route::middleware(['auth', 'todo.own'])->group(function () {
    Route::resource('todos', TodoController::class);
});

// Admin
Route::get('/admin', [DashboardController::class, 'index'])->middleware('admin')->name('admin');
