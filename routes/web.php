<?php

use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PostsController;

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

Route::get('/', [PostsController::class,'index']);
Route::get('dashboard', [DashboardController::class,'index'])->middleware('auth')->name('dashboard');
Route::post('create-post',[DashboardController::class,'createPost']);
Route::get('post/{id}', [PostsController::class,'getPost']);
Route::get('register',[LoginController::class,'registerView'])->name('register');
Route::post('register',[LoginController::class,'registerAction'])->name('registerPost');

Route::get('login',[LoginController::class,'loginView'])->name('login');
Route::post('login',[LoginController::class,'loginAction'])->name('loginPost');
Route::get('logout',[LoginController::class,'logoutAction'])->name('logout');


