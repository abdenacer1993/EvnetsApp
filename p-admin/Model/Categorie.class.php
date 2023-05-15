<?php
class Categorie{
private $nom;
private $discription;





function __construct($nom,$discription){
$this->nom = $nom;
$this->discription= $discription;


}





public function ajouter(){ 

include('../includes/connect_db.php');
    
	
    
    $req = $bdd->query("SELECT * FROM categorie WHERE nom LIKE '$this->nom'");
    $count = $req->rowCount();
    
    if ($count == 0) {
		//$type= intval($this->type);
		try {
      $req = $bdd->exec("INSERT INTO `categorie`(`nom`,`discription`) VALUES ('$this->nom','$this->discription')");
      echo "Category added successfully.";
  } catch (PDOException $e) {
      echo "Error: " . $e->getMessage();
  }
    } else {
                echo'non';
                echo $this->nom;
                //return FALSE;
	}
}

    public function modifier(){ 

    include('../includes/connect_db.php');

       $id=$_GET['id'];
        
        $req=$bdd->exec("UPDATE `categorie` SET nom='$this->nom',discription='$this->discription' WHERE id=$id");
				
        
        //echo'oui';
        //return TRUE;"
 			}	
			
public function supprimer(){ 
    
	include('../includes/connect_db.php');

    $req = $bdd->exec('DELETE FROM categorie WHERE id=\''.$_GET['id'].'\''); 
 
		//echo'oui';	
 
 
}


}


//$instance = new User($_POST['nom'],$_POST['prenom'],$_POST['login'],$_POST['email'],$_POST['pass'],$_POST['type']);
