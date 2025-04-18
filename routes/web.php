<?php

use App\Http\Controllers\AccueilController;
use App\Http\Controllers\EventController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('accueil');
});

// Route::get('/', [AccueilController::class, 'index']);
// Route::get('/', [EventController::class, 'index'])->name('events.index');
// Route::get('/events/{id}', [EventController::class, 'show'])->name('events.show');