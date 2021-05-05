<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\CompanyController;

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group([],
    function () {
        Route::get('companies', [CompanyController::class, 'getPaginatorForCompanies'])->name('companies.index');
        Route::resource('companies', CompanyController::class)->except(['index', 'show']);
});

Route::prefix('/staff')->resource('staff', StaffController::class);

\Illuminate\Support\Facades\Auth::routes();

