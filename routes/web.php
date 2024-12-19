<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SendEmailController;


Route::get('/', [DashboardController::class,'index']);

Route::post('/sendEmail',[SendEmailController::class, 'sendEmail']);