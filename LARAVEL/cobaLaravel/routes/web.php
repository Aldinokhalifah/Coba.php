<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\BlogController; 
use App\Http\Controllers\ChartController; 


Route::get('/', [IndexController::class, 'index'])->name('home');
Route::get('/blog', [BlogController::class, 'index'])->name('blog');
Route::get('/chart', [ChartController::class, 'index'])->name('chart');
