<?php


use App\Http\Controllers\Tenant\DashboardController;
use App\Http\Controllers\Tenant\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/{store}', [DashboardController::class, 'index'])->name('tenant.dashboard');

Route::group(['prefix' => '/{store}'], function () {
    Route::resource('products', ProductController::class);
});
