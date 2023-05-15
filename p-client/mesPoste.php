<?php
include('include/connect_db.php');
session_start();
$id_a = $_SESSION['id_a'];


$req = $bdd->query("SELECT * FROM postes where id_a = $id_a ");
$req_cat = $bdd->query("SELECT * FROM categorie ");


if (empty($id_a)) {
    
    header('Location:loginRegistre.php');
}else{
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Events</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/imgg.png" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@700;800&display=swap" rel="stylesheet">
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Navbar Start -->
        
        <!-- Navbar End -->

        <?php include('include/header.php'); ?>

        <!-- Header Start -->
        
        <!-- Header End -->


        <!-- Search Start -->
        <div class="container-fluid bg-primary mb-5 wow fadeIn" data-wow-delay="0.1s" style="padding: 35px;">
            <div class="container">
                <div class="row g-2">
                    <div class="col-md-10">
                        <div class="row g-2">
                        <div class="col-md-4"></div>
                            
                            <div class="col-md-4">
                            <div class="nav-item dropdown">
                                    <a href="#" class="nav-link dropdown-toggle" style="background-color:#13133e; text-align:center;" data-bs-toggle="dropdown">Chercher par catégorie</a>
                                    <div class="dropdown-menu rounded-0 m-0">
                                        <?php
                                        while ($donnees = $req_cat->fetch()) {

                                        ?>
                                            <a href="ListeParCategorie?type_event=<?php echo $donnees['nom']; ?>" class="dropdown-item" style="color: black;"><?php echo $donnees['nom']; ?></a>
                                        <?php } ?>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                    </div>
                </div>
            </div>
        </div>
        <!-- Search End -->


        <!-- Category Start -->
        <!-- <div class="container-xxl py-5">
            
        <!-- Category End -->


        <!-- About Start -->
        
        <!-- About End -->


        <!-- Property List Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-0 gx-5 align-items-end">
                    <div class="col-lg-6">
                        <div class="text-start mx-auto mb-5 wow slideInLeft" data-wow-delay="0.1s">
                            <h1 class="mb-3">Liste des postes</h1>
                        </div>
                    </div>
                    


                    <div class="col-lg-6 text-start text-lg-end wow slideInRight" data-wow-delay="0.1s">
                        <ul class="nav nav-pills d-inline-flex justify-content-end mb-5">
                            
                        </ul>
                    </div>
                    
                </div>
                <div class="tab-content">
                    <div id="tab-1" class="tab-pane fade show p-0 active">
                    <?php

if (isset($_GET['Ajout'])) {
    if ($_GET['Ajout'] = "oui") {

?>


        <div class="alert alert-success" role="alert" id="alert">
            <strong>Poste</strong> Ajouter avec succes.

        </div>

<?php }
}
?>





<?php

if (isset($_GET['result'])) {
    if ($_GET['result'] = "error") {

?>

        <div class="alert alert-danger" role="alert" id="alert">
            <strong>Poste</strong> Ajout echoué.
        </div>

<?php }
}
?>
                        <div class="row g-4">
                        <?php while ($donnees = $req->fetch()) {
                        $a=0.3;
                        if($donnees >= 3){
                            ?>
                            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="<?php echo $a?>s">
                                <div class="property-item rounded overflow-hidden">
                                    <div class="position-relative overflow-hidden">
                                        <a href="affichePoste.php?id_poste=<?php echo $donnees['id']?>"><img class="img-fluid" src="../p-admin/Controller/<?php echo $donnees['images']?>" height="150" width="300" alt=""></a>
                                        <div class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3"><?php echo $donnees['type_event']?></div>
                                        <div class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3"><?php echo $donnees['type_event']?></div>
                                    </div>
                                    <div class="p-4 pb-0">
                                         <h5 class="text-primary mb-3"><?php echo $donnees['nom_salle']?></h5> 
                                        <a class="d-block h5 mb-2" href=""><?php echo $donnees['nom_prop_salle']?></a>
                                        <p><i class="bi bi-telephone text-primary me-2"></i><?php echo $donnees['numtel_salle']?></p>
                                    </div>
                                    
                                </div>
                                

                            </div>
                            
                            
                            <?php 
                    
                 }}
                    ?>
                            
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Property List End -->


        <!-- Call to Action Start -->
        <!-- Call to Action End -->


        <!-- Team Start -->
        <!-- Team End -->


        <!-- Testimonial Start -->
        <!-- Testimonial End -->
        

        <!-- Footer Start -->
        <?php include('include/footer.php') ?>
        <!-- Footer End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
    <script>
            $("#alert").show("slow").delay(2000).hide("slow");
        </script>
</body>

</html>
<?php
}?>