
<?php
require_once('../Model/Poste.class.php');

$localisation = "upload/";
/* create new file name */
$filename = uniqid() . "-" . time(); // Example: 5dab1961e93a7-1571494241
$extension = pathinfo($_FILES["file"]["name"], PATHINFO_EXTENSION); // Example: jpg
$basename = $filename . "." . $extension; // Example: 5dab1961e93a7-1571494241.jpg

$chemin = $localisation . $basename;

/* move the file */
move_uploaded_file($_FILES["file"]["tmp_name"], $chemin);

$Postes = new Postes($_POST['nom_salle'],$_POST['nom_prop_salle'],$_POST['type_event'],$chemin,$_POST['numtel_salle'],'En cour...');
$Postes->ajouter();

header("location:../Liste-Postes.php?Ajout=oui");
?>