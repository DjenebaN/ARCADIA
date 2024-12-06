<!-- Page Header -->
<div class="page-header">
    <div class="container">
        <h1 class="text-center mb-4">Rejoignez l'Aventure</h1>
        <p class="lead text-center text-light">Connectez-vous ou créez un compte pour réserver vos escape games</p>
    </div>
</div>

<div class="container">
    <div class="row justify-content-center">
        <!-- Connexion -->
        <div class="col-md-5">
            <div class="custom-card p-4 fade-in">
                <h2 class="text-center mb-4"><i class="fas fa-sign-in-alt me-2"></i>Connexion</h2>
                <form action="controllers/utilisateurController.php" method="post">
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Mot de passe</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>
                    <div class="d-grid">
                        <input type="hidden" name="action" value="connexion">
                        <button type="submit" name="connexion" class="btn btn-escape">Se connecter</button>
                    </div>
                </form>
            </div>
        </div>

        <!-- Séparateur -->
        <div class="col-md-1 d-flex align-items-center justify-content-center">
            <div class="text-center" style="color: var(--primary-color);">
                <div class="h-100 d-flex flex-column justify-content-center">
                    <div style="width: 1px; height: 100%; background-color: var(--primary-color); margin: 0 auto;"></div>
                    <span class="my-3">OU</span>
                    <div style="width: 1px; height: 100%; background-color: var(--primary-color); margin: 0 auto;"></div>
                </div>
            </div>
        </div>

        <!-- Inscription -->
        <div class="col-md-5">
            <div class="custom-card p-4 fade-in">
                <h2 class="text-center mb-4"><i class="fas fa-user-plus me-2"></i>Inscription</h2>
                <form action="controllers/utilisateurController.php" method="post">
                    <div class="mb-3">
                        <label for="nom" class="form-label">Nom</label>
                        <input type="text" class="form-control" id="nom" name="nom" required>
                    </div>
                    <div class="mb-3">
                        <label for="prenom" class="form-label">Prénom</label>
                        <input type="text" class="form-control" id="prenom" name="prenom" required>
                    </div>
                    <div class="mb-3">
                        <label for="telephone" class="form-label">Telephone</label>
                        <input type="text" class="form-control" id="telephone" name="telephone" required>
                    </div>
                    <div class="mb-3">
                        <label for="email_inscription" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email_inscription" name="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="password_inscription" class="form-label">Mot de passe</label>
                        <input type="password" class="form-control" id="password_inscription" name="password" required>
                    </div>
                    <input type="hidden" name="action" value="ajouter">
                    <div class="d-grid">
                        <button type="submit" name="inscription" class="btn btn-escape">S'inscrire</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
