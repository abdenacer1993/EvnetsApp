<?php
include('include/connect_db.php');
session_start();
$id_a = $_SESSION['id_a'];
$id_p = $_GET['id_poste'];

$req = $bdd->query("SELECT * FROM postes where id = $id_p ");
$donnees = $req ->fetch();

$req_pos = $bdd->query("SELECT count(*) FROM images where id_poste=$id_p" );
   $donnees_pos = $req_pos->fetch();
   $req_pos_aff = $bdd->query("SELECT * FROM images where id_poste=$id_p" );
   $donnees_pos_aff = $req_pos_aff->fetch();
if (empty($id_a)){
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

        <?php include('include/header.php') ?>
        <!-- Header Start -->
        <div class="container-fluid header bg-white p-0">
            <div class="row g-0 align-items-center flex-column-reverse flex-md-row">
                <div class="col-md-6 p-5 mt-lg-5">
                    <h1 class="display-5 animated fadeIn mb-4">Choisir notre Salle <span class="text-primary"><?php echo $donnees['nom_salle']?></span></h1>
                    <p class="animated fadeIn mb-4 pb-2"><span class="text-primary">Nom de propriétaire :</span><strong> <?php echo $donnees['nom_prop_salle']?></strong> </p>
                    <p class="animated fadeIn mb-4 pb-2"><span class="text-primary">Numéro de telephone :</span><strong> <?php echo $donnees['numtel_salle']?></strong></p>
                        <?php if ($donnees_pos[0]<= 0) {?>
                    <a href="ajouterImagesPoste.php?id_poste=<?php echo $_GET['id_poste']?>" class="btn btn-primary py-3 px-5 me-3 animated fadeIn">Ajouter images</a>
                    <?php } ?>
                </div>
                <div class="col-md-6 animated fadeIn">
                    <div class="owl-carousel header-carousel">
                        <div class="owl-carousel-item">
                            <img class="img-fluid" src="Controller/<?php echo $donnees_pos_aff['img1']?>" alt="">
                        </div>
                        <div class="owl-carousel-item">
                            <img class="img-fluid" src="Controller/<?php echo $donnees_pos_aff['img2']?>" alt="">
                        </div>
                        <div class="owl-carousel-item">
                            <img class="img-fluid" src="Controller/<?php echo $donnees_pos_aff['img3']?>" alt="">
                        </div>
                        <div class="owl-carousel-item">
                            <img class="img-fluid" src="Controller/<?php echo $donnees_pos_aff['img4']?>" alt="">
                        </div>
                        <div class="owl-carousel-item">
                            <img class="img-fluid" src="Controller/<?php echo $donnees_pos_aff['img5']?>" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header End -->


        <!-- Search Start -->
        
        <!-- Search End -->


        <!-- Contact Start -->
        <!-- Contact End -->


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
</body>

</html>
<?php
}?>