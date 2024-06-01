<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MainController;
use App\Http\Controllers\ProfileController;

Route::get('/' , [MainController::class,'index'])->name('main');
Route::get('/profile' , [ProfileController::class,'index'])->name('profile');