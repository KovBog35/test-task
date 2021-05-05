<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\CompanyController;

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group([],
    function () {
        Route::get('/companies', [CompanyController::class, 'getPaginatorForCompanies'])->name('companies.index');
        Route::resource('/companies', CompanyController::class)->except(['index', 'show']);
});

Route::group([],
    function () {
        Route::get('/staff', [StaffController::class, 'getPaginatorForStaff'])->name('staff.index');
        Route::resource('/staff', StaffController::class)->except(['index', 'show']);
});

\Illuminate\Support\Facades\Auth::routes();

