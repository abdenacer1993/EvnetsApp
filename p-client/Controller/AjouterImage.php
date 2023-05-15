<?php
require_once('../Model/Image.class.php');


if (!isset($_GET['id_poste'])) {
    exit("Invalid input"); // Handle the case when 'id_pos' is not set
}

// $id_p = $_GET['id_pos'];

// $req = $bdd->query("SELECT * FROM postes WHERE id = ?");
// $req->execute([$id_p]);

// $donnees = $req->fetch();

// if (!$donnees) {
//     exit("Record not found"); // Handle the case when the record doesn't exist
// }

$id_poste = $_GET['id_poste'];

$uploadDir = "upload/";

function generateUniqueFilename($extension) {
    $filename = uniqid() . "-" . time();
    return $filename . "." . $extension;
}

$filePaths = [];

for ($i = 1; $i <= 5; $i++) {
    $fileKey = "file" . $i;

    if ($_FILES[$fileKey]['error'] === UPLOAD_ERR_OK) {
        $fileTmp = $_FILES[$fileKey]['tmp_name'];
        $fileExtension = pathinfo($_FILES[$fileKey]['name'], PATHINFO_EXTENSION);

        $filename = generateUniqueFilename($fileExtension);
        $filePath = $uploadDir . $filename;

        if (move_uploaded_file($fileTmp, $filePath)) {
            $filePaths[$i] = $filePath;
        } else {
            exit("Error moving file $i"); // Handle the file move error
        }
    }
}

$Images = new Image($id_poste, $filePaths[1], $filePaths[2], $filePaths[3], $filePaths[4], $filePaths[5]);
$Images->ajouter();

header("Location: ../mesPoste.php?Ajout=oui");
exit();
?>
