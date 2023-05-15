<?php
ob_start();
require_once('../Model/Poste.class.php');
include('../includes/connect_db.php');

$id=$_GET['id'];
$req10 = $bdd->query("SELECT * FROM postes where id=$id " );
   $donnees10 = $req10->fetch();

   $a=$donnees10['nom_salle'];
   $b=$donnees10['nom_prop_salle'];
   $c=$donnees10['type_event'];
   $d=$donnees10['images'];
   $e=$donnees10['numtel_salle'];




   $Postes = new Postes($a,$b,$c,$d,$e,'Accpter');
   $Postes->accepter();

header("location:../Liste-Postes.php?firas=ouiModif");

//exit();
?>