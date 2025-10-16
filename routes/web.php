<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;
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

Route::get('/', function () {
    return view('principal');
});

/*ROUTE SE LLAMA DESDE LA URL BUSCA EL CONTROLADORE Y LUEGO CON ::CLASS, 'METODO A EJECUTAR'
LUEGO DE ROUTE SE DEFINE SI ES GET, POST, PUT ETC*/
Route::get('/register', [RegisterController::class, 'crear'])->name('register');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/login',[LoginController::class, 'index'])->name('login');


Route::get('/muro', [PostController::class, 'index'])->name('posts.index');