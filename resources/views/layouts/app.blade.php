<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Application Événements</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Lien vers le fichier CSS externe -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons (pour les icônes sociales) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
</head>
<body class="d-flex flex-column min-vh-100">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">EventApp</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
    
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link active" href="{{ url('/') }}">Accueil</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Événements</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('/contact')}}">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Contenu principal -->
    <main class="flex-grow-1 py-4">
        <div class="container">
            @yield('content')
        </div>
    </main>

    <!-- Footer complet -->
    <footer class="bg-dark text-white mt-auto pt-5">
        <div class="container">
            <div class="row">

                <!-- À propos -->
                <div class="col-md-4 mb-3">
                    <h5>À propos</h5>
                    <p>EventApp est une plateforme dédiée à la découverte et à la gestion d'événements pour les professionnels et les passionnés.</p>
                </div>

                <!-- Liens rapides -->
                <div class="col-md-4 mb-3">
                    <h5>Liens rapides</h5>
                    <ul class="list-unstyled">
                        <li><a href="{{ url('/') }}" class="text-white text-decoration-none">Accueil</a></li>
                        <li><a href="#" class="text-white text-decoration-none">Événements</a></li>
                        <li><a href="#" class="text-white text-decoration-none">Contact</a></li>
                        <li><a href="#" class="text-white text-decoration-none">Mentions légales</a></li>
                    </ul>
                </div>

                <!-- Contact + Réseaux sociaux -->
                <div class="col-md-4 mb-3">
                    <div class="row">
                        <div class="col-6">
                            <h5>Contact</h5>
                            <p><strong>Email :</strong> contact@eventapp.com</p>
                            <p><strong>Téléphone :</strong> +33 1 23 45 67 89</p>
                        </div>
                        <div class="col-6">
                            <h5>Réseaux sociaux</h5>
                            <div>
                                <a href="#" class="text-white d-block mb-1"><i class="bi bi-facebook"></i> Facebook</a>
                                <a href="#" class="text-white d-block mb-1"><i class="bi bi-twitter"></i> Twitter</a>
                                <a href="#" class="text-white d-block"><i class="bi bi-instagram"></i> Instagram</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="text-center border-top border-secondary pt-3 mt-3">
                &copy; {{ date('Y') }} EventApp - Tous droits réservés.
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
