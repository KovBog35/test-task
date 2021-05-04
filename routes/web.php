<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\CompanyController;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('/companies')->resource('companies', CompanyController::class);

Route::prefix('/staff')->resource('staff', StaffController::class);

\Illuminate\Support\Facades\Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
