<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\App\HomeController;

Route::get('{any}', [HomeController::class, 'index'])->where('any', '.*')->name('home.index');
