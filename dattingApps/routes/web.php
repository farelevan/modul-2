<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
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

Route::get('/', [UserController::class, 'index'])->middleware('auth');
Route::get('/login', [UserController::class, 'login'])->middleware('guest')->name('login');
Route::post('/loginPost', [UserController::class, 'loginPost'])->middleware('guest');
Route::get('/register', [UserController::class, 'register'])->middleware('guest');
Route::post('/registerPost', [UserController::class, 'registerPost'])->middleware('guest');
Route::get('/logout', [UserController::class, 'logout'])->name('logout')->middleware('auth');


Route::get('/home', [HomeController::class, 'index']);
Route::post('/like/{id}', [HomeController::class, 'like'])->name('like');
