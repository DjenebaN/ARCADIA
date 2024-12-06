<?php

include('../bdd/Database.php');

include('../models/gameMaster.php');

if(isset($_POST['action'])) {
	
    $gamemasterController = new gameMasterController($bdd);

    switch ($_POST['action']) {

        case 'ajouter':
        $gamemasterController->NewgameMaster();
            break;
        
        case 'supprimer':
        $gamemasterController->deletegameMaster();
            break;

        default:
            # code...
            break;
    }
}

class gameMasterController
{
    private $gamemaster;

    function __construct($bdd)
    {
        $this->gamemaster = new gameMaster($bdd);
    }


    public function newgameMaster()
    {
        $this->gamemaster->giveMaster($_POST['id']);

        header('Location: http://localhost/projetfin/index.php?page=gestionGamemasters&success=GameMasterAjouter');
    }

    public function deletegameMaster()
    {
        $this->gamemaster->deleteMaster($_POST['id']);

        header('Location: http://localhost/projetfin/index.php?page=gestionGamemasters&success=GameMasterSupprimer');    
    }

}
?>
