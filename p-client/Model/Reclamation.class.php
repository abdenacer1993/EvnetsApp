<?php
class Reclamation{
private $nom;
private $email;
private $sujet;
private $msg;
private $date;
private $lu;

function __construct($nom,$email,$sujet,$msg,$date,$lu){
$this->nom = $nom;
$this->email = $email;
$this->sujet = $sujet;
$this->msg = $msg;
$this->date = $date;
$this->lu=$lu;
}





public function ajouter(){ 

include('../includes/connect_db.php');
    
	
    
    
    
		
		$req = $bdd->exec ("INSERT INTO `reclamation`(`nom`,`email`,`sujet`,`msj`,`date`,`lu`) VALUES ('$this->nom','$this->email','$this->sujet','$this->msg','$this->date','$this->lu')");
		
	
  
}

    
			
public function supprimer(){ 
    
	include('../includes/connect_db.php');

    $req = $bdd->exec('DELETE FROM reclamation WHERE id=\''.$_GET['id'].'\''); 
 
			
 
 
}


}





?>