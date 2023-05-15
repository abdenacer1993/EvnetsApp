<?php
class Client{
private $nom;

private $email;
private $password;



function __construct($nom,$password,$email){
$this->nom = $nom;
$this->password = $password;
$this->email = $email;


}





public function ajouter(){ 

include('../include/connect_db.php');
    
	
    
    $req = $bdd->query("SELECT * FROM client WHERE email LIKE '$this->email'");
    $count = $req->rowCount();
    
    if ($count == 0) {
		//$type= intval($this->type);
		$req = $bdd->exec ("INSERT INTO `client`(`nom`, `password`, `email`) VALUES ('$this->nom','$this->password','$this->email')");
		
		//echo'oui';
                //return TRUE;
    } else {
                echo'non';
                //return FALSE;
	}
}

    public function modifier(){ 

    include('../include/connect_db.php');

       $id=$_GET['id'];
        
        $req=$bdd->exec("UPDATE `client` SET nom='$this->nom',password='$this->password',email='$this->email' WHERE id=$id");
				
        
        //echo'oui';
        //return TRUE;"
 			}	
			
public function supprimer(){ 
    
	include('../include/connect_db.php');

    $req = $bdd->exec('DELETE FROM client WHERE id=\''.$_GET['id'].'\''); 
 
		//echo'oui';	
 
 
}


}


//$instance = new User($_POST['nom'],$_POST['prenom'],$_POST['login'],$_POST['email'],$_POST['pass'],$_POST['type']);


?>