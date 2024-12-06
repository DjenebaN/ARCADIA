<?php
session_start();
?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Escape Arcadia</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;700&family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/pages.css">

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- Custom JS -->
    <script src="assets/js/main.js"></script>
    <?php
    // Charger le JavaScript spécifique à la page si nécessaire
    $page = isset($_GET['page']) ? $_GET['page'] : 'accueil';
    if (file_exists($_SERVER['DOCUMENT_ROOT'] . "/Projetfin/assets/js/{$page}.js")) {
        echo "<script src='assets/js/{$page}.js' defer></script>";
    }
    ?>
</head>
<body>
    
<nav class="navbar navbar-expand-lg">
    <div class="container">
        <a class="navbar-brand" href="index.php">
            <i class="fas fa-key me-2"></i>Escape Arcadia
        </a>
        <button class="navbar-toggler menu-toggle" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse nav-menu" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index.php"><i class="fas fa-home me-1"></i>Accueil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php?page=reservation"><i class="fas fa-calendar-alt me-1"></i>Réservation</a>
                </li>
                <?php if (isset($_SESSION['utilisateur'])) : ?>
                <li class="nav-item">
                    <a class="nav-link" href="index.php?page=mesreservations"><i class="fas fa-list me-1"></i>Mes réservations</a>
                </li>
                <?php endif; ?>
                <li class="nav-item">
                    <a class="nav-link" href="index.php?page=faq"><i class="fas fa-question-circle me-1"></i>FAQ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php?page=contact"><i class="fas fa-envelope me-1"></i>Contact</a>
                </li>
                <?php if(!isset($_SESSION['utilisateur'])): ?>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?page=connectioninscription"><i class="fas fa-sign-in-alt me-1"></i>Connexion</a>
                    </li>
                <?php else: ?>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Compte
                        </a>
                        <?php if (($_SESSION['utilisateur']['type_utilisateur'])==3) : ?>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li><a class="dropdown-item" href="index.php?page=compte">Mon Compte</a></li>
                                <li><a class="dropdown-item" href="index.php?page=gestionSalles">Gestion des Salles</a></li>
                                <li><a class="dropdown-item" href="index.php?page=gestionGamemasters">Gestion des Gamemasters</a></li>
                                <li><a class="dropdown-item" href="index.php?page=gestionReservations">Gestion des Reservations</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="index.php?page=deconnexion">Deconnexion</a></li>
                            </ul>
                        <?php elseif (($_SESSION['utilisateur']['type_utilisateur'])==2) : ?>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li><a class="dropdown-item" href="index.php?page=compte">Mon Compte</a></li>
                                <li><a class="dropdown-item" href="index.php?page=assignationGM">Assignation GM</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="index.php?page=deconnexion">Deconnexion</a></li>
                            </ul>
                        <?php else : ?>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li><a class="dropdown-item" href="index.php?page=compte">Mon Compte</a></li>
                                <li><a class="dropdown-item" href="index.php?page=mesreservations">Mes Reservations</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="index.php?page=deconnexion">Deconnexion</a></li>
                            </ul>
                        <?php endif; ?>
                    </li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</nav>