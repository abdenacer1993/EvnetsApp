<?php
 require_once('../Model/Categorie.class.php');  
 include('../includes/connect_db.php');    
ob_start();
$categorie = new Categorie($_POST['nom'],$_POST['discription']);
$categorie->ajouter();

header("location:../Liste-Categorie.php?naser=oui");
?>