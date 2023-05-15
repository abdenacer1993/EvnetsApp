<?php
ob_start();
require_once('../Model/Admin.class.php');
$admin = new Admin($_POST['nom'],$_POST['login'],$_POST['password'],$_POST['email'],$_POST['type']);
$admin->supprimer();

header("location:../Liste-Administrateur.php");
//exit();
?>