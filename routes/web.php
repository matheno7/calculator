<?php

use App\Http\Controllers\CalculatorController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// web.php
Route::get('/calculator', [CalculatorController::class, 'index']);
