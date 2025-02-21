<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CompanyController;
use App\Http\Livewire\Signup;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [DashboardController::class, 'dashboard']);
Route::get('/company', [CompanyController::class, 'index']);
Route::get('/signup', Signup::class)->name('signup');
