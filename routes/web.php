<?php

use App\Http\Controllers\AccueilController;
use App\Http\Controllers\EventController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('accueil');
});


Route::get('/contact', function () {
    return view('contact');
});


Route::post('/contact', function (Request $request) {
    // Validation des données
    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'message' => 'required|string|max:1000',
    ]);

    // Vous pouvez ici envoyer l'email, sauvegarder le message, ou toute autre action.

    // Après le traitement du formulaire, redirige vers la page de contact avec un message de succès
    return redirect('/contact')->with('success', 'Merci pour votre message ! Nous vous répondrons dans les plus brefs délais.');
});



// Route::get('/', [AccueilController::class, 'index']);
// Route::get('/', [EventController::class, 'index'])->name('events.index');
// Route::get('/events/{id}', [EventController::class, 'show'])->name('events.show');