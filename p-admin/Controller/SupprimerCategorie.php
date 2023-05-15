<?php
ob_start();
require_once('../Model/Categorie.class.php');
$Categorie = new Categorie($_POST['nom'],$_POST['description']);
$Categorie->supprimer();

header("location:../Liste-categorie.php");
//exit();
?>