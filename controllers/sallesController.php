//CRUD

<?php

include('../bdd/Database.php');

include('../models/escapegame.php');

if(isset($_POST['action'])) {
	
    $sallesController = new sallesController($bdd);

    switch ($_POST['action']) {

        case 'ajouter':
            $sallesController->create();
            break;

        case 'supprimer':
            $sallesController->delete();
            break;

        case 'update':
		 $sallesController->update();
            break;

        case 'ajouterHoraire':
         $sallesController->ajouterHoraire();
            break;
            
        case 'supprimerHoraire':
         $sallesController->supprimerHoraire(); 
            break;

        default:
            # code...
            break;
    }
}

class sallesController
{
    private $salles;

    function __construct($bdd)
    {
        $this->salles = new EscapeGame($bdd);
    }

    public function create()
    {

        $this->salles->ajouterSalle($_POST['nom'], $_POST['theme_id'], $_POST['description'], $_POST['duree'], $_POST['nb_joueurs_min'], $_POST['nb_joueurs_max'], $_POST['prix'], $_POST['image']);

        header('Location: http://localhost/projetfin/index.php?page=gestionSalles&success=salleAjouter');

    }

    public function update()
    {
        /* Mettre a jour le compte utilisateur APRES LA CONNEXION (d'ou le manque de mdp) */ 
        $this->salles->updateSalle($_POST['id'], $_POST['nom'], $_POST['theme_id'], $_POST['description'], $_POST['duree'], $_POST['nb_joueurs_min'], $_POST['nb_joueurs_max'], $_POST['prix'], $_POST['image']);
    }

    public function delete()
    {
        $this->salles->supprimerSalle($_POST['id']);

        header('Location: http://localhost/projetfin/index.php?page=gestionSalles&success=salleSupprimer');
    }

    public function ajouterHoraire()
    {
        $this->salles->ajouterHoraire($_POST['salle_id'], $_POST['heure_debut'], $_POST['heure_fin']);
    }

    public function supprimerHoraire()
    {
        $this->salles->supprimerHoraire($_POST['id']);
    }

    


}

?>