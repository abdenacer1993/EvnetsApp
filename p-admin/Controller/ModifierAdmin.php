<?php
require_once('../Model/Admin.class.php');
 include('../includes/connect_db.php');
session_start();

$id=$_GET['id'];
$mdp=$_GET['mdp'];
$info=$_GET['info'];


$req = $bdd->query("SELECT * FROM administrateur WHERE id=$id");
$donnees = $req->fetch();

if($mdp=="oui")
{
$admin = new Admin($donnees['nom'],$donnees['login'],$_POST['password'],$donnees['email'],$donnees['type']);
}
else if ($info=="oui")
{
	$admin = new Admin($_POST['nom'],$_POST['login'],$donnees['password'],$_POST['email'],$donnees['type']);
}
else 
{
	$admin = new Admin($_POST['nom'],$_POST['login'],$_POST['password'],$_POST['email'],$_POST['type']);
}
$admin->modifier();

header("location:../Liste-Administrateur.php?firas=ouiModif");
//exit();
?>