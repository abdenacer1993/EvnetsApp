<?php
ob_start();

require_once('../Model/Reclamation.class.php');

$Reclamation = new Reclamation($_POST['email'],$_POST['sujet'],$_POST['msg'],$_POST['date'],$_POST['nom'],$_POST['lu']);
$Reclamation->supprimer();

header("location:../liste-msg.php?Supp=oui");

?>