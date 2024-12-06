document.addEventListener('DOMContentLoaded', () => {
    const form = document.getElementById('reservationForm');
    const nbJoueursSelect = document.getElementById('nb_joueurs');
    const totalPriceDisplay = document.getElementById('totalPrice');
    const pricePerPersonDisplay = document.getElementById('pricePerPerson');
    const dateInput = document.getElementById('date');
    
    // Prix de base par personne selon le nombre de joueurs
    const priceTable = {
        2: 30, // 30€ par personne pour 2 joueurs
        3: 27, // 27€ par personne pour 3 joueurs
        4: 25, // 25€ par personne pour 4 joueurs
        5: 23, // 23€ par personne pour 5 joueurs
        6: 20  // 20€ par personne pour 6 joueurs
    };

    // Mise à jour du prix quand le nombre de joueurs change
    if (nbJoueursSelect) {
        nbJoueursSelect.addEventListener('change', () => {
            const nbJoueurs = parseInt(nbJoueursSelect.value);
            if (nbJoueurs) {
                const pricePerPerson = priceTable[nbJoueurs];
                const totalPrice = pricePerPerson * nbJoueurs;
                
                totalPriceDisplay.textContent = escapeUtils.formatPrice(totalPrice);
                pricePerPersonDisplay.textContent = escapeUtils.formatPrice(pricePerPerson);
            } else {
                totalPriceDisplay.textContent = '--';
                pricePerPersonDisplay.textContent = '--';
            }
        });
    }

    // Gestion des cartes de sélection de salle
    const roomCards = document.querySelectorAll('.room-select-card');
    roomCards.forEach(card => {
        card.addEventListener('click', function() {
            roomCards.forEach(c => c.classList.remove('active'));
            this.classList.add('active');
            const radio = this.querySelector('input[type="radio"]');
            radio.checked = true;
        });
    });

    // Validation de la date
    if (dateInput) {
        // Définir la date minimale à aujourd'hui
        const today = new Date().toISOString().split('T')[0];
        dateInput.setAttribute('min', today);
        
        dateInput.addEventListener('change', () => {
            if (!escapeUtils.isValidFutureDate(dateInput.value)) {
                dateInput.value = '';
                escapeUtils.showNotification('Veuillez sélectionner une date future', 'error');
            }
        });
    }

    // Validation du formulaire avant soumission
    if (form) {
        form.addEventListener('submit', (e) => {
            e.preventDefault();
            
            // Vérifier si une salle est sélectionnée
            const selectedRoom = form.querySelector('input[name="salle"]:checked');
            if (!selectedRoom) {
                escapeUtils.showNotification('Veuillez sélectionner une salle', 'error');
                return;
            }

            // Vérifier si une date est sélectionnée
            if (!dateInput.value || !escapeUtils.isValidFutureDate(dateInput.value)) {
                escapeUtils.showNotification('Veuillez sélectionner une date valide', 'error');
                return;
            }

            // Vérifier si un créneau horaire est sélectionné
            const timeSelect = form.querySelector('#heure');
            if (!timeSelect.value) {
                escapeUtils.showNotification('Veuillez sélectionner un créneau horaire', 'error');
                return;
            }

            // Vérifier si le nombre de joueurs est sélectionné
            if (!nbJoueursSelect.value) {
                escapeUtils.showNotification('Veuillez sélectionner le nombre de joueurs', 'error');
                return;
            }

            // Si tout est valide, soumettre le formulaire
            form.submit();
        });
    }
});
