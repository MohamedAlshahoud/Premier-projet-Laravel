<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# Premier-projet-Laravel

## Description

Bienvenue sur mon premier projet Laravel ! Ce projet utilise **Laravel 12.x** pour la gestion des routes, des vues, des contrôleurs, des migrations de base de données, et bien plus encore.

## Fonctionnalités

- Authentification utilisateur avec gestion des sessions
- Système de gestion de contenu (articles, posts, etc.)
- Interface élégante avec **Vue.js** ou **Livewire** (selon ton choix de starter kit)
- Système de base de données avec **MySQL**
- Migrations pour la gestion des tables de la base de données
- Tests unitaires avec **Pest** ou **PHPUnit** (selon ton choix)

## Prérequis

Avant de commencer, assurez-vous d'avoir installé les logiciels suivants :

- **PHP 8.x+** : [Télécharger PHP](https://www.php.net/downloads)
- **Composer** : [Installer Composer](https://getcomposer.org/download/)
- **MySQL ou MariaDB** : [Installer MySQL](https://dev.mysql.com/downloads/)

## Installation

1. Clonez le projet :
   Clonez ce dépôt sur votre machine locale :

   ```bash
   git clone https://github.com/MohamedAlshahoud/Premier-projet-Laravel.git

2. Installez les dépendances PHP avec Composer :
   Depuis le répertoire du projet, exécutez la commande suivante pour installer toutes les dépendances PHP 

   ```bash
   composer install
   
3. Configurez votre environnement :
   
   ```bash
   Renommez le fichier .env.exemple en .env

   Puis configurez les informations de votre base de données dans le fichier .env. Exemple :

    ```bash
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=nom_de_votre_base_de_donnees
    DB_USERNAME=votre_nom_d_utilisateur
    DB_PASSWORD=mot_de_passe

   ```bash
   mv .env.exemple .env

4. Créez la base de données et effectuez les migrations :

   ```bash
   php artisan migrate

5. Lancez le serveur de développement :

   ```bash
   php artisan serve

6. Vous pourrez accéder à votre application sur **http://localhost:8000**
   


