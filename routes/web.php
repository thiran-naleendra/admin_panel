<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MainController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\RequestController;
use App\Http\Controllers\CallController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;



Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout'); // log out


Route::get('/landing' , [MainController::class,'landing'])->name('landing');

Route::get('/' , [MainController::class,'index'])->name('main');
Route::get('genaral' , [MainController::class,'genaral'])->name('genaral');


Route::post('/create_user', [UserController::class, 'create_user'])->name('create_user');

Route::get('/profile' , [ProfileController::class,'index'])->name('profile');

Route::get('/payments' , [PaymentController::class,'index'])->name('payments');

Route::get('/jobs' , [JobController::class,'index'])->name('jobs');

Route::get('/create_report' , [ReportController::class,'index'])->name('create_report');

Route::get('/create_request' , [RequestController::class,'index'])->name('create_request');

Route::get('/view_request' , [RequestController::class,'view_request'])->name('view_request');

Route::get('/shedule_call' , [CallController::class,'index'])->name('shedule_call');




// admin routs

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminHomeController;

Route::get('/admin_login' , [AdminController::class,'index'])->name('admin_login'); 
Route::post('/admin_login', [AdminController::class, 'admin_login']);
Route::post('/admin_logout', [AdminController::class, 'admin_logout'])->name('admin_logout');

Route::get('/admin_home' , [AdminHomeController::class,'index'])->name('admin_home'); 

Route::get('admin_signup' , [AdminController::class,'admin_signup'])->name('admin_signup'); 

Route::get('admin_view_request' , [AdminController::class,'admin_view_request'])->name('admin_view_request'); 
