<?php

use App\Http\Controllers\AccueilController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [AccueilController::class, 'index']);