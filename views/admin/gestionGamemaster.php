<?php

include('controllers/affichage/afficherUtilisateur.php');


?>


<h1>Gestion des Gamemasters</h1>
<?php if (isset($_GET['success']) && $_GET['success'] == 'GameMasterAjouter'): ?>
    <div class="alert alert-success" role="alert">
        L'ajout du gamemaster a bien fonctionne.
    </div>
<?php endif; ?>
<table class="table">
    <thead>
        <tr>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Email</th>
            <th>Téléphone</th>
            <th>Game Master</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($allUsers as $user): ?>
            <tr>
                <td><?= htmlspecialchars($user['nom']) ?></td>
                <td><?= htmlspecialchars($user['prenom']) ?></td>
                <td><?= htmlspecialchars($user['email']) ?></td>
                <td><?= htmlspecialchars($user['telephone'] ?? 'Non renseigné') ?></td>
                <td>
                    <?php if ($user['type_utilisateur'] == 2): ?>
                        <form action="controllers/gamemasterController.php" method="post">
                            <input type="hidden" name="action" value="supprimer">
                            <input type="hidden" name="id" value="<?= $user['id'] ?>">
                            <button type="submit" class="btn btn-danger">
                                <i class="fas fa-check me-2"></i>Enlever accès
                            </button>
                        </form>
                    <?php else: ?>
                        <form action="controllers/gamemasterController.php" method="post">
                            <input type="hidden" name="action" value="ajouter">
                            <input type="hidden" name="id" value="<?= $user['id'] ?>">
                            <button type="submit" class="btn btn-primary">
                                <i class="fas fa-plus me-2"></i>Donner accès
                            </button>
                        </form>
                    <?php endif; ?>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
