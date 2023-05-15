<?php
require_once('../Model/Client.class.php');
$Client = new Client($_POST['nom'],$_POST['password'],$_POST['email'],$_POST['type']);
$Client->ajouter();

header("location:../loginRegistre.php?naser=oui");
//exit();
?>