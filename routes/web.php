<?php

use Illuminate\Support\Facades\Route;


Route::get('/', [MainController::class, 'showIndex'])->name('home');

Route::get('/array', [MainController::class, 'showArray'])->name('array');

