<?php
ob_start();
require_once('../Model/Poste.class.php');
$Postes = new Postes($_POST['nom_salle'],$_POST['nom_prop_salle'],$_POST['type_event'],$_POST['image'],$_POST['numtel_salle'],$_POST['etat']);
$Postes->supprimer();

header("location:../Liste-Poste.php");
//exit();
?>