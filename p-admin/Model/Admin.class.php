<?php
class Admin{
private $nom;
private $login;
private $email;
private $password;
private $type;


function __construct($nom,$login,$password,$email,$type){
$this->nom = $nom;
$this->login = $login;
$this->password = $password;
$this->email = $email;
$this->type= $type;

}





public function ajouter(){ 

include('../includes/connect_db.php');
    
	
    
    $req = $bdd->query("SELECT * FROM administrateur WHERE login LIKE '$this->login'");
    $count = $req->rowCount();
    
    if ($count == 0) {
		//$type= intval($this->type);
		$req = $bdd->exec ("INSERT INTO `administrateur`(`nom`, `login`, `password`, `email`, `type`) VALUES ('$this->nom','$this->login','$this->password','$this->email','$this->type')");
		
		//echo'oui';
                //return TRUE;
    } else {
                echo'non';
                //return FALSE;
	}
}

    public function modifier(){ 

    include('../includes/connect_db.php');

       $id=$_GET['id'];
        
        $req=$bdd->exec("UPDATE `administrateur` SET nom='$this->nom',login='$this->login',password='$this->password',email='$this->email',type='$this->type' WHERE id=$id");
				
        
        //echo'oui';
        //return TRUE;"
 			}	
			
public function supprimer(){ 
    
	include('../includes/connect_db.php');

    $req = $bdd->exec('DELETE FROM administrateur WHERE id=\''.$_GET['id'].'\''); 
 
		//echo'oui';	
 
 
}


}


//$instance = new User($_POST['nom'],$_POST['prenom'],$_POST['login'],$_POST['email'],$_POST['pass'],$_POST['type']);


?>