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
use App\Http\Controllers\ContactController;
use App\Http\Controllers\EstimationController;

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
Route::post('/create_req' , [RequestController::class,'create_request'])->name('create_req');


Route::get('/view_request' , [RequestController::class,'view_request'])->name('view_request');

Route::get('/view_job_request-{id}' , [RequestController::class,'view_request'])->name('view_job_request');

Route::get('/shedule_call' , [CallController::class,'index'])->name('shedule_call');

Route::get('/contact' , [ContactController::class,'index'])->name('contact');

Route::get('/about' , [ContactController::class,'about'])->name('about');

Route::get('/estimation' , [EstimationController::class,'index'])->name('estimation');
Route::post('/save_estimation' , [EstimationController::class,'save_estimation'])->name('save_estimation');






// admin routs

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminEstimationController;
use App\Http\Controllers\AdminHomeController;
use App\Http\Controllers\AdminEmployeeController;
use App\Http\Controllers\AdminServiceController;

Route::get('/admin_login' , [AdminController::class,'index'])->name('admin_login'); 
Route::post('/admin_login', [AdminController::class, 'admin_login']);
Route::post('/admin_logout', [AdminController::class, 'admin_logout'])->name('admin_logout');

Route::get('/admin_home' , [AdminHomeController::class,'index'])->name('admin_home'); 

Route::get('admin_signup' , [AdminController::class,'admin_signup'])->name('admin_signup'); 

Route::get('admin_view_request' , [AdminController::class,'admin_view_request'])->name('admin_view_request'); 

Route::get('estimation_view' , [AdminEstimationController::class,'index'])->name('estimation_view'); 

Route::get('employee' , [AdminEmployeeController::class,'index'])->name('employee'); 
Route::post('create_employee' , [AdminEmployeeController::class,'create_employee'])->name('create_employee'); 


Route::get('service' , [AdminServiceController::class,'index'])->name('service'); 
Route::post('add_service' , [AdminServiceController::class,'add_service'])->name('add_service'); 



Route::get('/jobs-{id}', [AdminController::class, 'admin_view_request'])->name('edit_jobs');
// Route to handle the update request
Route::post('/jobs-{id}', [AdminController::class, 'update'])->name('jobs_update');



