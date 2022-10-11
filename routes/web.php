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
//Admin Routes

Route::middleware('auth')->group(function (){
    Route::get('dashboard', [DashboardController::class,'index'])->name('dashboard');
    Route::post('create-post',[PostsController::class,'create']);
    Route::get('posts/view/{uid}',[PostsController::class,'getPostsByUserId']);
    Route::get('post/edit/{id}',[PostsController::class,'edit']);
    Route::post('post/update/{id}',[PostsController::class,'update']);
    Route::post('post/delete/{id}',[PostsController::class,'delete']);
});


//Front routes
Route::get('register',[LoginController::class,'registerView'])->name('register');
Route::post('register',[LoginController::class,'registerAction'])->name('registerPost');
Route::get('login',[LoginController::class,'loginView'])->name('login');
Route::post('login',[LoginController::class,'loginAction'])->name('loginPost');
Route::get('logout',[LoginController::class,'logoutAction'])->name('logout');
Route::get('post/{id}', [PostsController::class,'getPost']);


