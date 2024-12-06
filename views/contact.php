<?php
// Activation de l'affichage des erreurs
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>

<div class="page-header">
    <div class="container">
        <h1>Contactez-nous</h1>
        <p class="lead">Une question ? Besoin d'aide ? N'hésitez pas à nous contacter !</p>
    </div>
</div>

<section class="contact-section">
    <div class="container">
        <div class="row">
            <!-- Informations de contact -->
            <div class="col-lg-6">
                <div class="contact-info">
                    <!-- Adresse -->
                    <div class="contact-info-item">
                        <i class="fas fa-map-marker-alt"></i>
                        <div>
                            <h3>Notre adresse</h3>
                            <p>123 Rue de l'Énigme<br>
                               75001 Paris<br>
                               France</p>
                        </div>
                    </div>

                    <!-- Horaires -->
                    <div class="contact-info-item">
                        <i class="fas fa-clock"></i>
                        <div>
                            <h3>Horaires d'ouverture</h3>
                            <ul>
                                <li><strong>Lundi :</strong> 10h00 - 22h30</li>
                                <li><strong>Mardi :</strong> 10h00 - 22h30</li>
                                <li><strong>Mercredi :</strong> 10h00 - 22h30</li>
                                <li><strong>Jeudi :</strong> 10h00 - 22h30</li>
                                <li><strong>Vendredi :</strong> 10h00 - 22h30</li>
                                <li><strong>Samedi :</strong> 10h00 - 22h30</li>
                                <li><strong>Dimanche :</strong> Fermé</li>
                            </ul>
                            <p class="mt-2"><small>* Dernière session 1h30 avant la fermeture (21h00)</small></p>
                        </div>
                    </div>

                    <!-- Téléphone -->
                    <div class="contact-info-item">
                        <i class="fas fa-phone"></i>
                        <div>
                            <h3>Téléphone</h3>
                            <p>Réservations : 01 23 45 67 89<br>
                               Support : 01 23 45 67 90</p>
                        </div>
                    </div>

                    <!-- Email -->
                    <div class="contact-info-item">
                        <i class="fas fa-envelope"></i>
                        <div>
                            <h3>Email</h3>
                            <p>contact@escape-arcadia.fr<br>
                               support@escape-arcadia.fr</p>
                        </div>
                    </div>
                </div>

                <!-- Carte Google Maps -->
                <div class="contact-map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2624.9916256937595!2d2.3414958!3d48.8615622!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66e1f06e2b70f%3A0x40b82c3688c9460!2sParis%2C%20France!5e0!3m2!1sfr!2sfr!4v1234567890" 
                            allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>

            <!-- Formulaire de contact -->
            <div class="col-lg-6">
                <div class="contact-form">
                    <h2>Envoyez-nous un message</h2>
                    <form id="contact-form" method="post" action="" novalidate>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="firstname" class="form-label">Prénom <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="firstname" name="firstname" required 
                                       pattern="[A-Za-zÀ-ÿ\s]{2,50}" 
                                       title="Votre prénom doit contenir entre 2 et 50 caractères, uniquement des lettres">
                                <div class="invalid-feedback">
                                    Veuillez entrer votre prénom (2 à 50 caractères, lettres uniquement)
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="lastname" class="form-label">Nom <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="lastname" name="lastname" required 
                                       pattern="[A-Za-zÀ-ÿ\s]{2,50}" 
                                       title="Votre nom doit contenir entre 2 et 50 caractères, uniquement des lettres">
                                <div class="invalid-feedback">
                                    Veuillez entrer votre nom (2 à 50 caractères, lettres uniquement)
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Adresse email <span class="text-danger">*</span></label>
                            <input type="email" class="form-control" id="email" name="email" required 
                                   pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$"
                                   title="Veuillez entrer une adresse email valide">
                            <div class="invalid-feedback">
                                Veuillez entrer une adresse email valide
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="subject" class="form-label">Sujet <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="subject" name="subject" required 
                                   minlength="5" maxlength="100"
                                   title="Le sujet doit contenir entre 5 et 100 caractères">
                            <div class="invalid-feedback">
                                Veuillez entrer un sujet (5 à 100 caractères)
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="message" class="form-label">Votre message <span class="text-danger">*</span></label>
                            <textarea class="form-control" id="message" name="message" rows="5" required 
                                      minlength="20" maxlength="1000"
                                      title="Votre message doit contenir entre 20 et 1000 caractères"></textarea>
                            <div class="invalid-feedback">
                                Veuillez entrer un message (20 à 1000 caractères)
                            </div>
                        </div>
                        <p class="small text-muted mb-3">Les champs marqués d'un <span class="text-danger">*</span> sont obligatoires</p>
                        <button type="submit" class="btn btn-escape">Envoyer le message</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Validation du formulaire
    const form = document.getElementById('contact-form');
    
    // Fonction pour vérifier si un champ est valide
    function validateField(field) {
        if (field.checkValidity()) {
            field.classList.remove('is-invalid');
            field.classList.add('is-valid');
            return true;
        } else {
            field.classList.remove('is-valid');
            field.classList.add('is-invalid');
            return false;
        }
    }

    // Validation en temps réel sur chaque champ
    form.querySelectorAll('input, textarea').forEach(field => {
        field.addEventListener('input', () => validateField(field));
        field.addEventListener('blur', () => validateField(field));
    });

    // Validation à la soumission du formulaire
    form.addEventListener('submit', function(e) {
        e.preventDefault();
        
        let isValid = true;
        
        // Vérifier tous les champs
        form.querySelectorAll('input, textarea').forEach(field => {
            if (!validateField(field)) {
                isValid = false;
            }
        });

        if (isValid) {
            // Ici, vous pouvez ajouter le code pour envoyer le message au backend
            alert('Merci pour votre message ! Nous vous répondrons dans les plus brefs délais.');
            form.reset();
            // Réinitialiser les classes de validation
            form.querySelectorAll('input, textarea').forEach(field => {
                field.classList.remove('is-valid');
            });
        } else {
            // Afficher un message d'erreur général
            alert('Veuillez remplir correctement tous les champs obligatoires.');
        }
    });
});
</script>