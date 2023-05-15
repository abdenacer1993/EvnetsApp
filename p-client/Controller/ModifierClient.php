<?php
require_once('../Model/Client.class.php');
 include('../include/connect_db.php');
session_start();

$id=$_GET['id'];


$old = $_POST['oldpassword'];

$req = $bdd->query("SELECT * FROM client WHERE id=$id");
$donnees = $req->fetch();
$mdp=$donnees['password'];
if($mdp==$old)
{


	$Client = new Client($_POST['nom'],$_POST['password'],$_POST['email']);
	$Client->modifier();

header("location:../ModifierCompteClient.php?Modifier=oui");
}else {
	header("location:../ModifierCompteClient.php?Modif=error");
	echo $mdp;
}


?>