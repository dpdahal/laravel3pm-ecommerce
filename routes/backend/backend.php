<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\Dashboard\DashboardController;


Route::group(['namespace' => 'Backend', 'prefix' => 'ecommerce-backend'], function () {
    Route::get('/', [DashboardController::class, 'index']);

    require dirname(__FILE__) . '/user/user.php';

});
