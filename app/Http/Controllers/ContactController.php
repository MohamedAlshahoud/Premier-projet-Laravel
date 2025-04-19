<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function showForm()
    {
        return view('contact'); // ton fichier contact.blade.php
    }

    public function sendForm(Request $request)
    {
        // Validation des données
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'message' => 'required|string',
        ]);

        // Ici, tu peux envoyer un email, ou stocker les infos dans la base
        // Exemple futur : Mail::to('tonadresse@example.com')->send(new ContactMail($request->all()));

        return back()->with('success', 'Votre message a bien été envoyé. Merci !');
    }
}
