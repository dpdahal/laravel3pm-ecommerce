<?php

use Illuminate\Support\Facades\Route;

use Illuminate\Support\Facades\Auth;


Auth::routes();

Route::get('/', function () {
    return view('welcome');
});





Auth::routes(['verify' => true]);
require __DIR__ . '/backend/backend.php';
