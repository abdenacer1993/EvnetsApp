<?php
ob_start();
require_once('../Model/Poste.class.php');
//include('../includes/connect_db.php');
$localisation="upload/";


if($_FILES['file']['name']!='')
{
	/* create new name file */
$filename   = uniqid() . "-" . time(); // 5dab1961e93a7-1571494241
$extension  = pathinfo( $_FILES["file"]["name"], PATHINFO_EXTENSION ); // jpg
$basename   = $filename . "." . $extension; // 5dab1961e93a7_1571494241.jpg


$chemin  = "upload/{$basename}";

/* move the file */
move_uploaded_file( $_FILES["file"]["tmp_name"], $chemin);
$Postes = new Postes($_POST['nom_salle'],$_POST['nom_prop_salle'],$_POST['type_event'],$chemin,$_POST['numtel_salle'],'En cour');
$Postes->modifier();

}
else 
{

 $id = $_GET['id'];

$req = $bdd->query("SELECT * FROM postes WHERE id = $id");
$donnees = $req->fetch();


$Postes = new Postes($_POST['nom_salle'],$_POST['nom_prop_salle'],$_POST['type_event'],$chemin,$_POST['numtel_salle'],'En cour');
$Postes->modifier();


 
}

header("location:../Liste-Postes.php?firas=ouiModif");

//exit();
?>