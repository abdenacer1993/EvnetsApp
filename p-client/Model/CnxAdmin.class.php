<?php
class CnxAdmin{
private $email;
private $password;

        
function __construct($email,$password){
$this->email = $email;
$this->password = $password;


}


public function verifier(){ 

    include('../include/connect_db.php');
    $req = $bdd->query(" SELECT * FROM client WHERE email = '$this->email' AND password = '$this->password'");
    $resultat = $req->fetch();
    

 if (!$resultat)
{
  header('location:../loginRegistre.php?result=error');
  
}
   else
{
       session_start();

       $_SESSION['id_a'] = $resultat['id'];
       $_SESSION['nom'] = $resultat['nom'];
       $_SESSION['email'] = $resultat['email'];
       $_SESSION['password'] = $resultat['password'];
       
     
header('location:../index.php');


}

}
}





?>