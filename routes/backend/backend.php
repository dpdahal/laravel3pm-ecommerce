<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\Dashboard\DashboardController;


Route::group(['namespace' => 'Backend', 'prefix' => 'ecommerce-backend','middleware' => ['auth', 'verified']], function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

    require dirname(__FILE__) . '/user/user.php';

});
