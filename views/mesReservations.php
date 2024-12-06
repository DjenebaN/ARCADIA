<?php


include('controllers/affichage/afficherReservation.php');

?>

<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card shadow-lg border-0">
                <div class="card-header bg-primary text-white">
                    <h3 class="mb-0">Mes Réservations</h3>
                </div>
                <div class="card-body p-4">
                    <?php if (empty($sallereserver)): ?>
                        <div class="alert alert-info" role="alert">
                            <i class="fas fa-info-circle me-2"></i>
                            Vous n'avez pas encore de réservations.
                        </div>
                        <div class="text-center mt-4">
                            <a href="index.php?page=reservation" class="btn btn-primary">
                                <i class="fas fa-plus-circle me-2"></i>Faire une réservation
                            </a>
                        </div>
                    <?php else: ?>
                        <?php foreach ($sallereserver as $reservation): ?>
                            <div class="card mb-3">
                                <div class="row g-0">
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <h5 class="card-title"><?= htmlspecialchars($reservation['nom']) ?></h5>
                                            <p class="card-text">
                                                Date : <?= date('d/m/Y', strtotime($reservation['heure_debut'])) ?>
                                            </p>
                                            <p class="card-text">
                                                Horaire : <?= date('H:i', strtotime($reservation['heure_debut'])) ?> - 
                                                         <?= date('H:i', strtotime($reservation['heure_fin'])) ?>
                                            </p>
                                            <p class="card-text">
                                                Nombre de participants : <?= htmlspecialchars($reservation['nb_participants']) ?>
                                            </p>
                                            <p class="card-text">
                                                Prix total : <?= htmlspecialchars($reservation['prix_total']) ?> €
                                            </p>
                                            <?php
                                            $now = new DateTime();
                                            $reservation_date = new DateTime($reservation['heure_debut']);
                                            if ($reservation_date > $now):
                                            ?>
                                                <button class="btn btn-danger" 
                                                        onclick="if(confirm('Êtes-vous sûr de vouloir annuler cette réservation ?')) 
                                                                window.location.href='index.php?page=annulerReservation&id=<?= $reservation['id'] ?>'">
                                                    <i class="fas fa-times me-2"></i>Annuler la réservation
                                                </button>
                                            <?php else: ?>
                                                <span class="badge bg-secondary">Réservation passée</span>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                        <div class="text-center mt-4">
                            <a href="index.php?page=reservation" class="btn btn-success">
                                <i class="fas fa-plus-circle me-2"></i>Nouvelle réservation
                            </a>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>
