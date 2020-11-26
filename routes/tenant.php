<?php


use App\Http\Controllers\Tanent\DashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/{store}', [DashboardController::class, 'index'])->name('tenant.dashboard');
