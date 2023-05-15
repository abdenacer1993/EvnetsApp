<?php
ob_start();
require_once('../Model/Categorie.class.php');

$Categorie = new Categorie($_POST['nom'],$_POST['description']);
$Categorie->modifier();



 include('../includes/connect_db.php');
 $id = $_GET['id'];

 $req = $bdd->query("SELECT * FROM categorie WHERE id = $id");
$donnees = $req->fetch();

$Categorie = new Categorie($_POST['nom'],$_POST['description']);
$Categorie->modifier();
 


header("location:../Liste-categorie.php?firas=ouiModif");

//exit();
?>