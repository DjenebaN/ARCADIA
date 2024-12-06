//CRUD gestion des gameMaster
<?php
class GameMaster
{

	function __construct($bdd)
	{
		$this->bdd = $bdd;
	}

    public function giveMaster($id)
    {
        $req = $this->bdd->prepare("UPDATE utilisateurs SET type_utilisateur = 2 WHERE id = :id");
        $req->bindParam(':id', $id);
        return $req->execute();
    }

    public function deleteMaster($id)
    {
        $req = $this->bdd->prepare("UPDATE utilisateurs SET type_utilisateur = 1 WHERE id = :id");
        $req->bindParam(':id', $id);
        return $req->execute();
    }
}

?>