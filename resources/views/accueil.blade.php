@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <!-- Section d'introduction -->
        <div class="text-center mb-5">
            <h1>Bienvenue sur notre plateforme de gestion d'événements !</h1>
            <p>Réservez vos billets pour les événements à venir, découvrez de nouveaux événements ou gérez les vôtres en tant qu'organisateur ! 🎉</p>
            <a href="#" class="btn btn-primary">Voir les événements à venir</a>
        </div>

        <!-- Section des événements à venir -->
        <h2 class="text-center mb-4">Événements à venir</h2>

        <div class="row">
            @foreach($events as $event)
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="{{ asset('images/'.$event->image) }}" class="card-img-top" alt="{{ $event->title }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $event->title }}</h5>
                            <p class="card-text">{{ Str::limit($event->description, 100) }}</p>
                            <a href="#" class="btn btn-secondary">Voir détails</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
