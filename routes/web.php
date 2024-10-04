<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\AppController;
use App\Http\Controllers\LoginController;

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
Route::get('/pruebas', [AppController::class, 'pruebas'])->name('pruebas');
/* Route:: Metodo de envio (Ruta, Nombre Vista, [Variables]) -> Nombre de la Ruta */

Route::get('/', [AppController::class, 'home'])->name('home');
Route::get('/about', [AppController::class, 'about'])->name('about')->middleware('auth');
Route::get('/contact', [AppController::class, 'contact'])->name('contact');

/* ------------------------------------------------------------------------ */
Route::get('/posts', [PostController::class, 'index'])->name('posts.index');
Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');
Route::post('/posts', [PostController::class, 'store'])->name('posts.store');
Route::get('/posts/{id}', [PostController::class, 'show'])->name('posts.show');
Route::get('/posts/{id}/edit', [PostController::class, 'edit'])->name('posts.edit');
Route::patch('/posts/{id}', [PostController::class, 'update'])->name('posts.update');
Route::delete('/posts/{id}', [PostController::class, 'destroy'])->name('posts.destroy');

/* ------------------------------------------------------------------------ */
Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/login', [LoginController::class, 'store'])->name('login.store');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/login/create_login', [LoginController::class,'create_login'])->name('create_login');
Route::post('/login/create_login', [LoginController::class,'store_login'])->name('store_login');


