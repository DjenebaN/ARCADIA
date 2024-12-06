<?php



include('bdd/Database.php');
include('models/reservation.php');
$reservation = new reservation($bdd);

// Récupération des réservations avec les informations des salles
$sallereserver = $reservation->getReservationsByUtilisateur($_SESSION['utilisateur']['id']);

$allreservations = $reservation->getAllReservations();

?>