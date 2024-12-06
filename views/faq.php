<?php
// Activation de l'affichage des erreurs
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>

<div class="page-header">
    <div class="container">
        <h1>Foire Aux Questions</h1>
        <p class="lead">Trouvez les réponses à vos questions sur Escape Arcadia</p>
    </div>
</div>

<section class="faq-section">
    <div class="container faq-container">
        <!-- À propos d'Escape Arcadia -->
        <div class="faq-category">
            <h2>À propos d'Escape Arcadia</h2>
            
            <div class="faq-item">
                <div class="faq-question">
                    <h3>Qu'est-ce qu'un escape game ?</h3>
                    <span class="icon"><i class="fas fa-chevron-down"></i></span>
                </div>
                <div class="faq-answer">
                    <p>Un escape game est un jeu d'évasion grandeur nature où vous êtes enfermés dans une pièce thématique avec votre équipe. Vous avez un temps limité pour résoudre des énigmes, découvrir des indices et accomplir une mission pour vous échapper. C'est une expérience immersive qui combine réflexion, travail d'équipe et divertissement.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question">
                    <h3>Qui peut participer à un escape game ?</h3>
                    <span class="icon"><i class="fas fa-chevron-down"></i></span>
                </div>
                <div class="faq-answer">
                    <p>Nos escape games sont accessibles à tous à partir de 12 ans. Les mineurs doivent être accompagnés d'au moins un adulte. Nous proposons différents niveaux de difficulté pour satisfaire aussi bien les débutants que les joueurs expérimentés.</p>
                </div>
            </div>
        </div>

        <!-- Nos Salles -->
        <div class="faq-category">
            <h2>Nos Salles</h2>
            
            <div class="faq-item">
                <div class="faq-question">
                    <h3>Quelles sont les différentes salles disponibles ?</h3>
                    <span class="icon"><i class="fas fa-chevron-down"></i></span>
                </div>
                <div class="faq-answer">
                    <p>Nous proposons actuellement trois salles thématiques :</p>
                    <ul>
                        <li><strong>Le Laboratoire Secret</strong> (★★★☆☆) - 60 minutes - 2 à 5 joueurs</li>
                        <li><strong>L'Évasion d'Alcatraz</strong> (★★★★☆) - 75 minutes - 2 à 6 joueurs</li>
                        <li><strong>Le Tombeau du Pharaon</strong> (★★★★★) - 90 minutes - 3 à 6 joueurs</li>
                    </ul>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question">
                    <h3>Quelle salle choisir pour une première expérience ?</h3>
                    <span class="icon"><i class="fas fa-chevron-down"></i></span>
                </div>
                <div class="faq-answer">
                    <p>Pour une première expérience, nous recommandons "Le Laboratoire Secret". Cette salle offre un bon équilibre entre défi et accessibilité, avec une difficulté modérée (★★★☆☆) et une durée de 60 minutes. Elle permet de se familiariser avec les mécaniques d'un escape game tout en vivant une aventure passionnante.</p>
                </div>
            </div>
        </div>

        <!-- Réservations -->
        <div class="faq-category">
            <h2>Réservations</h2>
            
            <div class="faq-item">
                <div class="faq-question">
                    <h3>Comment réserver une session ?</h3>
                    <span class="icon"><i class="fas fa-chevron-down"></i></span>
                </div>
                <div class="faq-answer">
                    <p>Pour réserver une session :</p>
                    <ol>
                        <li>Créez un compte ou connectez-vous</li>
                        <li>Cliquez sur "Réserver" dans le menu</li>
                        <li>Choisissez votre salle et la date souhaitée</li>
                        <li>Sélectionnez un créneau horaire disponible (en vert)</li>
                        <li>Indiquez le nombre de participants</li>
                        <li>Confirmez votre réservation</li>
                    </ol>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question">
                    <h3>Quels sont les horaires d'ouverture ?</h3>
                    <span class="icon"><i class="fas fa-chevron-down"></i></span>
                </div>
                <div class="faq-answer">
                    <p>Nous sommes ouverts du lundi au samedi avec des créneaux disponibles de 10h à 21h30. Les dernières sessions commencent à 20h. Les créneaux sont espacés de 1h30 pour assurer une expérience optimale à chaque groupe.</p>
                </div>
            </div>
        </div>

        <!-- Informations Pratiques -->
        <div class="faq-category">
            <h2>Informations Pratiques</h2>
            
            <div class="faq-item">
                <div class="faq-question">
                    <h3>Que faut-il apporter ?</h3>
                    <span class="icon"><i class="fas fa-chevron-down"></i></span>
                </div>
                <div class="faq-answer">
                    <p>Il vous suffit de venir avec :</p>
                    <ul>
                        <li>Une pièce d'identité</li>
                        <li>Votre confirmation de réservation</li>
                        <li>De la bonne humeur et de l'esprit d'équipe !</li>
                    </ul>
                    <p>Tout le matériel nécessaire pour résoudre les énigmes est fourni dans les salles.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question">
                    <h3>Y a-t-il un âge minimum requis ?</h3>
                    <span class="icon"><i class="fas fa-chevron-down"></i></span>
                </div>
                <div class="faq-answer">
                    <p>L'âge minimum recommandé est de 12 ans. Les participants de moins de 16 ans doivent être accompagnés d'au moins un adulte. Certaines salles peuvent avoir des restrictions d'âge spécifiques en fonction de leur thème et de leur difficulté.</p>
                </div>
            </div>
        </div>

        <!-- Formulaire pour nouvelles questions -->
        <div class="faq-form">
            <h2>Vous avez une autre question ?</h2>
            <form id="question-form" method="post" action="" novalidate>
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
                    <label for="question" class="form-label">Votre question <span class="text-danger">*</span></label>
                    <textarea class="form-control" id="question" name="question" rows="4" required
                              minlength="10" maxlength="500"
                              title="Votre question doit contenir entre 10 et 500 caractères"></textarea>
                    <div class="invalid-feedback">
                        Veuillez entrer votre question (10 à 500 caractères)
                    </div>
                </div>
                <p class="small text-muted mb-3">Les champs marqués d'un <span class="text-danger">*</span> sont obligatoires</p>
                <button type="submit" class="btn btn-escape">Envoyer ma question</button>
            </form>
        </div>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Gestion des questions/réponses existantes
    document.querySelectorAll('.faq-question').forEach(question => {
        question.addEventListener('click', function() {
            const answer = this.nextElementSibling;
            const icon = this.querySelector('.icon');
            
            // Toggle active class
            this.classList.toggle('active');
            answer.classList.toggle('active');
            
            // Animate other answers
            document.querySelectorAll('.faq-answer').forEach(otherAnswer => {
                if (otherAnswer !== answer) {
                    otherAnswer.classList.remove('active');
                    otherAnswer.previousElementSibling.classList.remove('active');
                }
            });
        });
    });

    // Validation du formulaire
    const form = document.getElementById('question-form');
    
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
            // Ici, vous pouvez ajouter le code pour envoyer la question au backend
            alert('Merci pour votre question ! Nous vous répondrons dans les plus brefs délais.');
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