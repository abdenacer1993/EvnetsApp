<?php
class CnxAdmin{
private $login;
private $password;

        
function __construct($login,$password){
$this->login = $login;
$this->password = $password;


}


public function verifier(){ 

    include('../includes/connect_db.php');
    $req = $bdd->query(" SELECT * FROM administrateur WHERE login = '$this->login' AND password = '$this->password'");
    $resultat = $req->fetch();
    

 if (!$resultat)
{
  header('location:../login-Administrateur.php?result=error');
  
}
   else
{
       session_start();

       $_SESSION['id_a'] = $resultat['id'];
       $_SESSION['nom'] = $resultat['nom'];
       $_SESSION['login'] = $resultat['login'];
       $_SESSION['email'] = $resultat['email'];
       $_SESSION['password'] = $resultat['password'];
       
     
header('location:../index.php');


}

}
}





?>