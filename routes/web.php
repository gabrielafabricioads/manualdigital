<?php

use App\Http\Controllers\ManualController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ManualController::class, 'index'])->name('home');
