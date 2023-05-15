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
    <link href="scss/login.css" rel="stylesheet">
</head>

<body>

    <div class="login-page">
        <?php

        if (isset($_GET['naser'])) {
            if ($_GET['naser'] = "oui") {

        ?>


                <div class="alert alert-success" role="alert" id="alert">
                    <strong>Compte</strong> ajouter avec succes.

                </div>

        <?php }
        }
        ?>





        <?php

        if (isset($_GET['result'])) {
            if ($_GET['result'] = "error") {

        ?>

                <div class="alert alert-danger" role="alert" id="alert">
                <strong>Compte</strong> email ou password invalid.
                </div>

        <?php }
        }
        ?>

        <div class="card">




            <div class="form">

                <form class="register-form" method="POST" action="Controller/AjoutClient.php">
                    <input type="text" name="nom" placeholder="Nom & prénom" required="required" />
                    <input type="password" name="password" placeholder="Mot de passe" required="required" />
                    <input type="text" name="email" placeholder="email address" required="required" />
                    <button>create</button>
                    <p class="message">Non enregistré? <a href="#">S'identifier</a></p>
                </form>
                <form class="login-form" method="POST" action="Controller/verifClient.php">
                    <input type="text" name="email" placeholder="Email" required="required" />
                    <input type="password" name="password" placeholder="mot de passe" required="required" />
                    <button>login</button>
                    <p class="message">Non enregistré? <a href="#">Creer compte</a></p>
                </form>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="lib/wow/wow.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/waypoints/waypoints.min.js"></script>
        <script src="lib/owlcarousel/owl.carousel.min.js"></script>

        <!-- Template Javascript -->
        <script src="js/login.js"></script>
        <script>
            $("#alert").show("slow").delay(2000).hide("slow");
        </script>
</body>

</html>