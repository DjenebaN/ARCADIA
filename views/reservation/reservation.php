<?php
// Activer l'affichage des erreurs
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Vérifier si l'utilisateur est connecté
if (!isset($_SESSION['utilisateur'])) {
    header('Location: index.php?page=connectioninscription');
    exit();
}

// Configuration des salles
$rooms = [
    1 => [
        'name' => 'Le Laboratoire Secret',
        'image' => 'Labo.avif',
        'difficulty' => '★★★☆☆',
        'duration' => '60min',
        'min_players' => 2,
        'max_players' => 5
    ],
    2 => [
        'name' => "L'Évasion d'Alcatraz",
        'image' => 'prison.avif',
        'difficulty' => '★★★★☆',
        'duration' => '75min',
        'min_players' => 2,
        'max_players' => 6
    ],
    3 => [
        'name' => 'Le Tombeau du Pharaon',
        'image' => 'Egypt.jpg',
        'difficulty' => '★★★★★',
        'duration' => '90min',
        'min_players' => 3,
        'max_players' => 6
    ]
];

// Créneaux horaires disponibles
$timeSlots = ['10:00', '11:30', '14:00', '15:30', '17:00', '18:30', '20:00'];
?>

<!-- Page Header -->
<div class="page-header">
    <div class="container">
        <h1>Réservez Votre Escape Game</h1>
        <p class="lead">Choisissez votre salle, date et créneau horaire</p>
    </div>
</div>

<div class="container my-5">
    <!-- Sélecteur de date -->
    <div class="date-selector">
        <h3 class="section-title mb-4"><i class="fas fa-calendar-alt me-2"></i>Sélectionnez une date</h3>
        <input type="date" id="reservation-date" min="<?php echo date('Y-m-d'); ?>" 
               max="<?php echo date('Y-m-d', strtotime('+2 months')); ?>" 
               value="<?php echo date('Y-m-d'); ?>" class="form-control">
    </div>

    <!-- Liste des salles -->
    <?php foreach ($rooms as $id => $room): ?>
    <div class="reservation-room">
        <div class="reservation-room-header">
            <img src="assets/images/<?php echo htmlspecialchars($room['image']); ?>" 
                 alt="<?php echo htmlspecialchars($room['name']); ?>" 
                 class="reservation-room-image">
            <div class="reservation-room-info">
                <h3><?php echo htmlspecialchars($room['name']); ?></h3>
                <div class="difficulty"><?php echo $room['difficulty']; ?></div>
                <div class="capacity-info">
                    <i class="fas fa-users me-2"></i><?php echo $room['min_players']; ?>-<?php echo $room['max_players']; ?> joueurs
                    <span class="ms-3"><i class="fas fa-clock me-2"></i><?php echo $room['duration']; ?></span>
                </div>
            </div>
        </div>

        <div class="time-slots" data-room-id="<?php echo $id; ?>">
            <?php foreach ($timeSlots as $time): ?>
                <?php
                // Simulation de disponibilité (à remplacer par la logique de base de données)
                $isAvailable = rand(0, 1) === 1;
                $class = $isAvailable ? 'available' : 'unavailable';
                ?>
                <div class="time-slot <?php echo $class; ?>" data-time="<?php echo $time; ?>">
                    <?php echo $time; ?>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
    <?php endforeach; ?>

    <!-- Formulaire de confirmation -->
    <form id="booking-form" action="" method="post" class="d-none">
        <input type="hidden" name="room_id" id="selected-room">
        <input type="hidden" name="date" id="selected-date">
        <input type="hidden" name="time" id="selected-time">
        <div class="mb-3">
            <label for="players" class="form-label">Nombre de joueurs</label>
            <select class="form-select" id="players" name="players" required>
                <option value="">Sélectionnez le nombre de joueurs</option>
            </select>
        </div>
        <button type="submit" class="btn btn-escape">Confirmer la réservation</button>
    </form>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const dateInput = document.getElementById('reservation-date');
    const bookingForm = document.getElementById('booking-form');
    const rooms = <?php echo json_encode($rooms); ?>;

    // Mise à jour des créneaux lors du changement de date
    dateInput.addEventListener('change', function() {
        updateTimeSlots(this.value);
    });

    // Gestion des clics sur les créneaux
    document.querySelectorAll('.time-slot').forEach(slot => {
        slot.addEventListener('click', function() {
            if (this.classList.contains('available')) {
                // Réinitialiser tous les créneaux sélectionnés
                document.querySelectorAll('.time-slot.selected').forEach(s => {
                    s.classList.remove('selected');
                });
                
                // Sélectionner le créneau actuel
                this.classList.add('selected');
                
                // Afficher le formulaire de confirmation
                const roomId = this.closest('.time-slots').dataset.roomId;
                const room = rooms[roomId];
                
                // Mettre à jour le formulaire
                document.getElementById('selected-room').value = roomId;
                document.getElementById('selected-date').value = dateInput.value;
                document.getElementById('selected-time').value = this.dataset.time;
                
                // Mettre à jour les options de nombre de joueurs
                const playersSelect = document.getElementById('players');
                playersSelect.innerHTML = '';
                for (let i = room.min_players; i <= room.max_players; i++) {
                    const option = document.createElement('option');
                    option.value = i;
                    option.textContent = i + (i === 1 ? ' joueur' : ' joueurs');
                    playersSelect.appendChild(option);
                }
                
                bookingForm.classList.remove('d-none');
            }
        });
    });

    function updateTimeSlots(date) {
        // Simulation de mise à jour des créneaux (à remplacer par un appel AJAX)
        document.querySelectorAll('.time-slot').forEach(slot => {
            slot.classList.remove('selected');
            slot.classList.toggle('available', Math.random() > 0.5);
            slot.classList.toggle('unavailable', Math.random() < 0.5);
        });
        bookingForm.classList.add('d-none');
    }
});
</script>
