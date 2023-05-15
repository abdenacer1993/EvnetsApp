<?php 

require_once('../Model/CnxAdmin.class.php');

$admin = new CnxAdmin($_POST['login'],$_POST['password']);
$admin->verifier();

?>
