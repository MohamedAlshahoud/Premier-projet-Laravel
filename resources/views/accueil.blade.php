@extends('layouts.app')

@section('content')
    <div class="text-center mt-5">
        <h1>Bienvenue sur EventApp ! 🎉</h1>
        <p>Votre plateforme de gestion et de réservation d’événements en ligne.</p>
        <a href="#" class="btn btn-primary">Voir tous les événements</a>
    </div>

    <!-- Section Événements à venir -->
    <section class="mt-5">
        <h2 class="mb-4">Événements à venir</h2>
        <div class="row">
            <!-- Exemple d'événement 1 -->
            <div class="col-md-4">
                <div class="card">
                    <img src="https://source.unsplash.com/400x200/?concert" class="card-img-top" alt="Concert">
                    <div class="card-body">
                        <h5 class="card-title">Concert Live</h5>
                        <p class="card-text">Un concert en plein air avec des artistes internationaux. 🎶</p>
                        <a href="#" class="btn btn-outline-primary">Voir détails</a>
                    </div>
                </div>
            </div>

            <!-- Exemple d'événement 2 -->
            <div class="col-md-4">
                <div class="card">
                    <img src="https://source.unsplash.com/400x200/?conference" class="card-img-top" alt="Conférence">
                    <div class="card-body">
                        <h5 class="card-title">Conférence Tech</h5>
                        <p class="card-text">Les dernières innovations du monde du numérique. 👨‍💻</p>
                        <a href="#" class="btn btn-outline-primary">Voir détails</a>
                    </div>
                </div>
            </div>

            <!-- Exemple d'événement 3 -->
            <div class="col-md-4">
                <div class="card">
                    <img src="https://source.unsplash.com/400x200/?festival" class="card-img-top" alt="Festival">
                    <div class="card-body">
                        <h5 class="card-title">Festival de rue</h5>
                        <p class="card-text">Danse, musique et gastronomie au cœur de la ville. 🌆</p>
                        <a href="#" class="btn btn-outline-primary">Voir détails</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
