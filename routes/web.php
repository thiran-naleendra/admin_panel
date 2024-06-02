<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MainController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\RequestController;
use App\Http\Controllers\CallController;




Route::get('/' , [MainController::class,'index'])->name('main');
Route::get('genaral' , [MainController::class,'genaral'])->name('genaral');
Route::get('signup' , [MainController::class,'signup'])->name('signup');

Route::get('/profile' , [ProfileController::class,'index'])->name('profile');

Route::get('/payments' , [PaymentController::class,'index'])->name('payments');

Route::get('/jobs' , [JobController::class,'index'])->name('jobs');

Route::get('/create_report' , [ReportController::class,'index'])->name('create_report');

Route::get('/create_request' , [RequestController::class,'index'])->name('create_request');

Route::get('/view_request' , [RequestController::class,'view_request'])->name('view_request');

Route::get('/shedule_call' , [CallController::class,'index'])->name('shedule_call');