<?php


include('controllers/affichage/afficherEscapegame.php');

$getsalle = $escapegame->getSalleById($_GET['id']);
$horaires = $escapegame->getHoraireBySalleId($_GET['id']);
?>


<div class="container py-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1>Horaires de la salle <?= htmlspecialchars($getsalle['nom']) ?></h1>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th>Date</th>
                <th>Début</th>
                <th>Fin</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $now = new DateTime();
            foreach ($horaires as $horaire):
                $horaire_date = new DateTime($horaire['heure_debut']);
                if ($horaire_date > $now):
            ?>
                <tr>
                    <td><?= date('d/m/Y', strtotime($horaire['heure_debut'])) ?></td>
                    <td><?= date('H:i', strtotime($horaire['heure_debut'])) ?></td>
                    <td><?= date('H:i', strtotime($horaire['heure_fin'])) ?></td>
                    <td>
                        <?php if ($_SESSION['utilisateur']['type_utilisateur'] == 3): ?>
                            <form action="controllers/sallesController.php" method="post">
                                <input type="hidden" name="action" value="supprimerHoraire">
                                <input type="hidden" name="id" value="<?= $horaire['id'] ?>">
                                <button type="submit" class="btn btn-danger">
                                    <i class="fas fa-trash-alt me-2"></i>Supprimer
                                </button>
                            </form>
                        <?php endif; ?>
                        <a href="index.php?page=reservationHoraire&id=<?= $horaire['id'] ?>&salle_id=<?= $_GET['id'] ?>" class="btn btn-primary">
                            <i class="fas fa-plus-circle me-2"></i>Résserver
                        </a>
                    </td>
                </tr>
            <?php endif; endforeach; ?>
        </tbody>
    </table>
</div>
