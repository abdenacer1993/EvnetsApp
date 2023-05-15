<?php
class Postes{
private $nom_salle;
private $nom_prop_salle;
private $images;
private $type_event;
private $numtel_salle;
private $etat;


function __construct($nom_salle,$nom_prop_salle,$type_event,$images,$numtel_salle,$etat){
$this->nom_salle = $nom_salle;
$this->nom_prop_salle = $nom_prop_salle;
$this->type_event = $type_event;
$this->images = $images;
$this->numtel_salle= $numtel_salle;
$this->etat = $etat;

}





public function ajouter(){ 

include('../includes/connect_db.php');
    
	
    
    $req = $bdd->query("SELECT * FROM postes WHERE nom_salle LIKE '$this->nom_salle'");
    $count = $req->rowCount();
    
    if ($count == 0) {
		//$numtel_salle= intval($this->numtel_salle);
		$req = $bdd->exec ("INSERT INTO `postes`(`nom_salle`, `nom_prop_salle`, `type_event`, `images`, `numtel_salle`, `etat`) VALUES ('$this->nom_salle','$this->nom_prop_salle','$this->type_event','$this->images','$this->numtel_salle','$this->etat')");
		
		//echo'oui';
                //return TRUE;
    } else {
                echo'non';
                //return FALSE;
	}
}

    public function accepter(){ 

    include('../includes/connect_db.php');

       $id=$_GET['id'];
        
        $req=$bdd->exec("UPDATE `postes` SET nom_salle='$this->nom_salle',nom_prop_salle='$this->nom_prop_salle',type_event='$this->type_event',images='$this->images',numtel_salle='$this->numtel_salle',etat='$this->etat' WHERE id=$id");
				
        
        //echo'oui';
        //return TRUE;"
 			}	
			
public function supprimer(){ 
    
	include('../includes/connect_db.php');

    $req = $bdd->exec('DELETE FROM postes WHERE id=\''.$_GET['id'].'\''); 
 
		//echo'oui';	
 
 
}


}


//$instance = new User($_POST['nom_salle'],$_POST['prenom_salle'],$_POST['nom_prop_salle'],$_POST['images'],$_POST['pass'],$_POST['numtel_salle']);


?>