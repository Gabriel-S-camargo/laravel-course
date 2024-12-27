<?php

use App\Http\Controllers\HelloController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
// Nomeando a rota '/about'
Route::view('/about', 'about')->name('about');
