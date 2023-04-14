<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController; 
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

// Route::get('/', function () {
//     return view('welcome');
// })->middleware('auth');

Route::get('/login', [LoginController::class, 'login'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate'])->middleware('guest');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout')->middleware('auth');

// Route::get('/index', [DashboardController::class, 'index'])->name('index')->middleware('guest');
Route::resource('/dashboard', DashboardController::class)->middleware('auth');


Route::resource('/user', UserController::class)->middleware('auth');


// Route::controller('users', 'UserController::class')->group(function(){
//     Route::resource('/user', UserController::class)->middleware('auth','can:read role');
// });

// Route::resource('/role', RoleController::class)->middleware('auth');
