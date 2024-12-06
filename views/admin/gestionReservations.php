<?php

include('controllers/affichage/afficherReservation.php');

if (!isset($_SESSION['utilisateur']) || $_SESSION['utilisateur']['type_utilisateur'] != 3) {
    header('Location: index.php?page=accueil');
    exit();
}

?>



<div class="container py-5">
    <?php if (isset($_GET['success']) && $_GET['success'] == 'ReservationAnnuler'): ?>
        <div class="alert alert-success" role="alert">
            L'annulation de la reservation a bien fonctionne.
        </div>
    <?php endif; ?>
    <h1 class="mb-4">Gestion des Réservations</h1>

    <?php if (empty($allreservations)): ?>
        <div class="alert alert-info" role="alert">
            <i class="fas fa-info-circle me-2"></i>
            Aucune réservation à venir.
        </div>
    <?php else: ?>
        <div class="table-responsive">
            <table class="table table-striped table-hover">
                <thead class="table-dark">
                    <tr>
                        <th>Client</th>
                        <th>Salle</th>
                        <th>Date</th>
                        <th>Horaire</th>
                        <th>Participants</th>
                        <th>Prix</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($allreservations as $reservation): ?>
                        <tr>
                            <td>
                                <?= htmlspecialchars($reservation['utilisateur_prenom']) ?> 
                                <?= htmlspecialchars($reservation['utilisateur_nom']) ?>
                            </td>
                            <td><?= htmlspecialchars($reservation['nom']) ?></td>
                            <td><?= date('d/m/Y', strtotime($reservation['heure_debut'])) ?></td>
                            <td>
                                <?= date('H:i', strtotime($reservation['heure_debut'])) ?> - 
                                <?= date('H:i', strtotime($reservation['heure_fin'])) ?>
                            </td>
                            <td><?= htmlspecialchars($reservation['nb_participants']) ?></td>
                            <td><?= htmlspecialchars($reservation['prix_total']) ?>€</td>
                            <td>
                                <form action="controllers/reservationsController.php" method="post" onsubmit="return confirm('Êtes-vous sûr de vouloir annuler cette réservation ?')">
                                    <input type="hidden" name="action" value="annuler">
                                    <input type="hidden" name="id" value="<?= $reservation['id'] ?>">
                                    <button type="submit" class="btn btn-danger">
                                        <i class="fas fa-trash-alt me-2"></i>Annuler
                                    </button>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    <?php endif; ?>
</div>
