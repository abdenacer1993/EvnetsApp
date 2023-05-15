<?php
class Image{
private $id_poste;
private $img1;
private $img2;
private $img3;
private $img4;
private $img5;

function __construct($id_poste,$img1,$img2,$img3,$img4,$img5){
$this->id_poste = $id_poste;
$this->img1 = $img1;
$this->img2 = $img2;
$this->img3 = $img3;
$this->img4 = $img4;
$this->img5 = $img5;
}





public function ajouter(){ 

include('../include/connect_db.php');
    
	
    
    
    
		
		$req = $bdd->exec ("INSERT INTO `images`(`id_poste`,`img1`,`img2`,`img3`,`img4`,`img5`) values ('$this->id_poste','$this->img1','$this->img2','$this->img3','$this->img4','$this->img5')");
		
	
  
}

    
			
public function supprimer(){ 
    
	include('../inculde/connect_db.php');

    $req = $bdd->exec('DELETE FROM images WHERE id=\''.$_GET['id'].'\''); 
 
			
 
 
}


}





?>