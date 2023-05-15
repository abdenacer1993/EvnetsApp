<?php
include('include/connect_db.php');
session_start();
$id = $_SESSION['id_a'];
$req = $bdd->query("SELECT * FROM client where id = $id ");
$donnees = $req->fetch();
$req_cat = $bdd->query("SELECT * FROM categorie ");

if (empty($id)) {
    header('Location:loginRegistre.php');
} else {

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
                        <h1 class="display-5 animated fadeIn mb-4">Ajout poste</h1>
                        <nav aria-label="breadcrumb animated fadeIn">
                            <ol class="breadcrumb text-uppercase">
                                <li class="breadcrumb-item"><a href="#">Acceuil</a></li>
                                <li class="breadcrumb-item"><a href="#">Pages</a></li>
                                <li class="breadcrumb-item text-body active" aria-current="page">Ajout poste</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="col-md-6 animated fadeIn">

                    </div>
                </div>
            </div>
            <!-- Header End -->


            <!-- Search Start -->

            <!-- Search End -->


            <!-- Contact Start -->
            <div class="container-xxl py-5">
                <div class="container">

                    <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                        <h1 class="mb-3">Ajouter poste</h1>
                    </div>
                    <div class="row g-4">


                        <div class="col-md-6">
                            <div class="wow fadeInUp" data-wow-delay="0.5s">
                                <p class="mb-4"></p>
                                <form method="POST" action="Controller/ModifierClient.php?id=<?php echo $id?>" enctype="multipart/form-data">
                                    <div class="row g-3">
                                        <?php

                                        if (isset($_GET['Modifier'])) {
                                            if ($_GET['Modifier'] = "oui") {

                                        ?>


                                                <div class="alert alert-success" role="alert" id="alert">
                                                    <strong>Compte</strong> Modifier avec succes.

                                                </div>

                                        <?php }
                                        }
                                        ?>





                                        <?php

                                        if (isset($_GET['Modif'])) {
                                            if ($_GET['Modif'] = "error") {

                                        ?>

                                                <div class="alert alert-danger" role="alert" id="alert">
                                                    <strong>Compte</strong> Modification echoué ancien password incorrect.
                                                </div>

                                        <?php }
                                        }
                                        ?>
                                        <div class="col-md-12">
                                            <div class="form-floating">
                                                <input type="text" class="form-control" required="required" name="nom" id="name" value="<?php echo $donnees['nom']?>">
                                                <label for="name">Nom & Prénom</label>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-floating">
                                                <input type="email" class="form-control" required="required" name="email" id="email" value="<?php echo $donnees['email']?>" >
                                                <label for="email">Email</label>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-floating">
                                                <input type="password" class="form-control" required="required"  name="oldpassword" placeholder="Ancien mot de passe">
                                                <label for="password">Ancien mot de passe</label>
                                            </div>
                                        </div>
                                        
                                        
                                        
                                            <div class="col-md-12">
                                            <div class="form-floating">
                                                <input type="password" class="form-control" required="required" name="password" id="password" placeholder="Nouveau mot de passe" >
                                                <label for="password">Nouveau mot de passe</label>
                                            </div>
                                        </div>
                                        
                                        
                                        
                                        <div class="col-5">
                                            <button class="btn btn-primary w-100 py-3"  type="submit">Modifier compte</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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
        
                <script>
            $("#alert").show("slow").delay(2000).hide("slow");
        </script>
        <script>
    function checkPassword() {
      var oldPassword = document.getElementById("ancienpassword").value;
      var newPassword = document.getElementById("password").value;
      
      if (oldPassword === newPassword) {
        alert("New password should be different from the old password.");
      } else {
        alert("Password change successful.");
        // Perform further actions here
      }
    }
  </script>
    </body>

    </html>
<?php
} ?>