<?php

$date = date('d-m-Y'); // Obtient la date au format 'DD-MM-YYYY'



require_once('../Model/Contact.class.php');
$Reclamation = new Reclamation($_POST['nom'],$_POST['email'],$_POST['sujet'],$_POST['msg'],$date,0);
$Reclamation->ajouter();
header("location:../contact.php?Ajout=oui");

?>