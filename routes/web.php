<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GameController;

Route::get('/', [GameController::class, 'index'])->name('home'); // GET para exibir a página inicial
Route::get('/about', [GameController::class,'about'])->name('about');
Route::get('/login',[GameController::class, 'login'] )->name('login');
Route::get('/register',[GameController::class, 'register'] )->name('register');

Route::post('/login', [GameController::class,'authenticate'])->name('authenticate');
Route::post('/register', [GameController::class, 'store'])->name('store');
Route::middleware(["auth"])->group(function () {
    Route::post('/logout', [GameController::class, 'logout'])->name('logout'); // POST para logout
    Route::post('/buy', [GameController::class, 'buyGames'])->name('buyGames'); // POST para comprar jogos
});
