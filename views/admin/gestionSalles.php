<?php
include('controllers/affichage/afficherEscapegame.php');

if (!isset($_SESSION['utilisateur']) || $_SESSION['utilisateur']['type_utilisateur'] != 3) {
    header('Location: index.php?page=accueil');
    exit();
}
?>
<div class="container py-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1>Gestion des Salles</h1>
    </div>
    <?php if (isset($_GET['success']) && ($_GET['success'] == 'salleSupprimer' || $_GET['success'] == 'salleAjouter')): ?>
        <div class="alert alert-success" role="alert">
            L'action sur les salles a bien fonctionne.
        </div>
    <?php endif; ?>
    
    <div class="row">
        <?php foreach ($allsalles as $salle): ?>
            <div class="col-md-6 mb-4">
                <div class="card h-100 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title"><?= htmlspecialchars($salle['nom']) ?></h5>
                        <p class="card-text">
                            <strong>Thème:</strong> <?= htmlspecialchars($salle['theme_nom'] ?? 'Non défini') ?><br>
                            <strong>Description:</strong> <?= htmlspecialchars($salle['description']) ?><br>
                            <strong>Durée:</strong> <?= $salle['duree'] ?> minutes<br>
                            <strong>Joueurs:</strong> <?= $salle['nb_joueurs_min'] ?> - <?= $salle['nb_joueurs_max'] ?> personnes<br>
                            <strong>Prix:</strong> <?= $salle['prix'] ?>€
                        </p>
                        <div class="d-flex justify-content-end gap-2">
                            <form action="controllers/sallesController.php" method="post" onsubmit="return confirm('Êtes-vous sûr de vouloir supprimer cette salle ?')">
                                <input type="hidden" name="action" value="supprimer">
                                <input type="hidden" name="id" value="<?= $salle['id'] ?>">
                                <button type="submit" class="btn btn-danger">
                                    <i class="fas fa-trash-alt me-2"></i>Supprimer
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
<!-- Ajout de salle -->
<div class="container py-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1>Ajout de salle</h1>
    </div>
    
    <form action="controllers/sallesController.php" method="post">
        <div class="row">
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="nom" class="form-label">Nom de la salle</label>
                    <input type="text" class="form-control" id="nom" name="nom" required>
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="theme_id" class="form-label">Thème</label>
                    <select class="form-select" id="theme_id" name="theme_id" required>
                        <option value="">Sélectionner un thème</option>
                        <?php foreach ($allThemes as $theme): ?>
                            <option value="<?= $theme['id'] ?>"><?= htmlspecialchars($theme['nom']) ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea class="form-control" id="description" name="description" rows="3" required></textarea>
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="duree" class="form-label">Durée en minutes</label>
                    <input type="number" class="form-control" id="duree" name="duree" required>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="nb_joueurs_min" class="form-label">Nombre de joueurs minimum</label>
                    <input type="number" class="form-control" id="nb_joueurs_min" name="nb_joueurs_min" required>
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="image" class="form-label">Image</label>
                    <input type="file" class="form-control" id="image" name="image">
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="nb_joueurs_max" class="form-label">Nombre de joueurs maximum</label>
                    <input type="number" class="form-control" id="nb_joueurs_max" name="nb_joueurs_max" required>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="prix" class="form-label">Prix</label>
                    <input type="number" class="form-control" id="prix" name="prix" required>
                </div>
            </div>
        </div>
        <input type="hidden" name="action" value="ajouter">
        <button type="submit" class="btn btn-primary">Ajouter la salle</button>
    </form>
</div>

<!-- modifier salle -->
 
<div class="container py-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1>Modifier une salle</h1>
    </div>
    <form method="post" enctype="multipart/form-data">
        <div class="row">
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="salle_id" class="form-label">Sélectionner la salle à modifier</label>
                    <select class="form-select" id="salle_id" name="id" required>
                        <option value="">Sélectionner une salle</option>
                        <?php foreach ($allsalles as $salle): ?>
                            <option value="<?= $salle['id'] ?>"><?= htmlspecialchars($salle['nom']) ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="nom" class="form-label">Nom</label>
                    <input type="text" class="form-control" id="nom" name="nom" required>
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="theme_id" class="form-label">Thème</label>
                    <select class="form-select" id="theme_id" name="theme_id" required>
                        <option value="">Sélectionner un thème</option>
                        <?php foreach ($allThemes as $theme): ?>
                            <option value="<?= $theme['id'] ?>"><?= htmlspecialchars($theme['nom']) ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea class="form-control" id="description" name="description" rows="3" required></textarea>
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="duree" class="form-label">Durée en minutes</label>
                    <input type="number" class="form-control" id="duree" name="duree" required>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="nb_joueurs_min" class="form-label">Nombre de joueurs minimum</label>
                    <input type="number" class="form-control" id="nb_joueurs_min" name="nb_joueurs_min" required>
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="image" class="form-label">Image</label>
                    <input type="file" class="form-control" id="image" name="image">
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="nb_joueurs_max" class="form-label">Nombre de joueurs maximum</label>
                    <input type="number" class="form-control" id="nb_joueurs_max" name="nb_joueurs_max" required>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="prix" class="form-label">Prix</label>
                    <input type="number" class="form-control" id="prix" name="prix" required>
                </div>
            </div>
        </div>
        <input type="hidden" name="action" value="update">
        <button type="submit" class="btn btn-primary">Modifier la salle</button>
    </form>
</div>

<!-- ajouter horaires -->
<div class="container py-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1>Ajouter un horaire</h1>
    </div>
    <form method="post" action="controllers/sallesController.php">
        <div class="row">
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="salle_id" class="form-label">Sélectionner la salle</label>
                    <select class="form-select" id="salle_id" name="salle_id" required>
                        <option value="">Sélectionner une salle</option>
                        <?php foreach ($allsalles as $salle): ?>
                            <option value="<?= $salle['id'] ?>"><?= htmlspecialchars($salle['nom']) ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="heure_debut" class="form-label">Heure de début</label>
                    <input type="datetime-local" class="form-control" id="heure_debut" name="heure_debut" required>
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="heure_fin" class="form-label">Heure de fin</label>
                    <input type="datetime-local" class="form-control" id="heure_fin" name="heure_fin" required>
                </div>
            </div>
        </div>
        <input type="hidden" name="action" value="ajouterHoraire">
        <button type="submit" class="btn btn-primary">Ajouter l'horaire</button>
    </form>
</div>




