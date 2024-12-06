<?php


include('bdd/Database.php');
include('models/escapegame.php');
$escapegame = new EscapeGame($bdd);

// Récupération des réservations avec les informations des salles
$allsalles = $escapegame->getAllSalles();

$allThemes = $escapegame->getAllThemes();


?>

