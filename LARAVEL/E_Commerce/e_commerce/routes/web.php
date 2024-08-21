<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShoesController;


Route::get('/', [ShoesController::class, 'index'])->name('home');
Route::get('/show/{id}', [ShoesController::class, 'show'])->name('home.show');