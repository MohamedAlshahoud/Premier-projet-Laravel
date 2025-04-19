<!DOCTYPE html>
<html lang="fr" class="h-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon Projet Laravel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <!-- Bootstrap Icons (optionnel pour les icônes) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
</head>
<body class="d-flex flex-column min-vh-100">

    <!-- Header -->
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">Mon Projet Laravel</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a class="nav-link active" href="{{ url('/') }}">Accueil</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Événements</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Se connecter</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ url('/contact') }}">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <!-- Contenu principal -->
    <main class="flex-grow-1 container py-4">
        @yield('content')
    </main>

    <!-- Footer complet -->
    <footer class="bg-dark text-white pt-4 mt-auto">
        <div class="container">
            <div class="row">
                <!-- À propos -->
                <div class="col-md-4 mb-3">
                    <h5 class="text-uppercase">À propos</h5>
                    <p class="small">Mon Projet Laravel est une plateforme de gestion d'événements simplifiée et intuitive. Créez, gérez et partagez des événements facilement.</p>
                </div>

                <!-- Liens utiles -->
                <div class="col-md-4 mb-3">
                    <h5 class="text-uppercase">Liens utiles</h5>
                    <ul class="list-unstyled">
                        <li><a href="{{ url('/contact') }}" class="text-white text-decoration-none">Contact</a></li>
                        <li><a href="#" class="text-white text-decoration-none">Mentions légales</a></li>
                        <li><a href="#" class="text-white text-decoration-none">Conditions d'utilisation</a></li>
                    </ul>
                </div>

                <!-- Réseaux sociaux -->
                <div class="col-md-4 mb-3">
                    <h5 class="text-uppercase">Suivez-nous</h5>
                    <a href="#" class="text-white me-3 fs-4" title="Facebook"><i class="bi bi-facebook"></i></a>
                    <a href="#" class="text-white me-3 fs-4" title="Twitter"><i class="bi bi-twitter"></i></a>
                    <a href="#" class="text-white me-3 fs-4" title="Instagram"><i class="bi bi-instagram"></i></a>
                    <a href="#" class="text-white fs-4" title="GitHub"><i class="bi bi-github"></i></a>
                </div>
            </div>

            <hr class="border-secondary">

            <div class="row">
                <div class="col-12 text-center">
                    <p class="mb-0">&copy; {{ date('Y') }} Mon Projet Laravel. Tous droits réservés.</p>
                    <small><a href="#" class="text-white text-decoration-none">Politique de confidentialité</a></small>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
