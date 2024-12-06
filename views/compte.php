<?php
require_once('views/commun/header.php');

// Vérification de la connexion
if (!isset($_SESSION['utilisateur'])) {
    header('Location: index.php?page=connectioninscription');
    exit();
}

$user = $_SESSION['utilisateur'];
?>

<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-lg border-0">
                <div class="card-header bg-primary text-white text-center py-3">
                    <h3 class="mb-0">Mon Compte</h3>
                </div>
                
                <div class="card-body p-4">

                    <!-- Informations utilisateur -->
                    <div class="row g-4">
                        <!-- Nom -->
                        <div class="col-md-6">
                            <div class="p-3 bg-light rounded">
                                <h6 class="text-muted mb-1">Nom</h6>
                                <p class="h5 mb-0"><?php echo htmlspecialchars($user['nom']); ?></p>
                            </div>
                        </div>

                        <!-- Prénom -->
                        <div class="col-md-6">
                            <div class="p-3 bg-light rounded">
                                <h6 class="text-muted mb-1">Prénom</h6>
                                <p class="h5 mb-0"><?php echo htmlspecialchars($user['prenom']); ?></p>
                            </div>
                        </div>

                        <!-- Email -->
                        <div class="col-md-6">
                            <div class="p-3 bg-light rounded">
                                <h6 class="text-muted mb-1">Email</h6>
                                <p class="h5 mb-0"><?php echo htmlspecialchars($user['email']); ?></p>
                            </div>
                        </div>

                        <!-- Téléphone -->
                        <div class="col-md-6">
                            <div class="p-3 bg-light rounded">
                                <h6 class="text-muted mb-1">Téléphone</h6>
                                <p class="h5 mb-0"><?php echo htmlspecialchars($user['telephone'] ?? 'Non renseigné'); ?></p>
                            </div>
                        </div>

                        <!-- Type Utilisateur -->
                        <div class="col-12">
                            <div class="p-3 bg-light rounded">
                                <h6 class="text-muted mb-1">Type de compte</h6>
                                <p class="h5 mb-0">
                                    <?php 
                                    $type = htmlspecialchars($user['type_utilisateur']);
                                    $badge_class = $type === 'admin' ? 'bg-danger' : 'bg-success';
                                    echo "<span class='badge {$badge_class}'>{$type}</span>";
                                    ?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Actions -->
                <div class="card-footer bg-white text-center py-3">
                    <div class="d-grid gap-2 d-md-flex justify-content-md-center">
                        <a href="index.php?page=modifierProfil" class="btn btn-primary px-4">
                            <i class="fas fa-edit me-2"></i>Modifier mon profil
                        </a>
                        <?php if ($user['type_utilisateur'] == 1): ?>
                        <a href="index.php?page=mesReservations" class="btn btn-success px-4">
                            <i class="fas fa-calendar-alt me-2"></i>Mes réservations
                        </a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require_once('views/commun/footer.php'); ?>