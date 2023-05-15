<?php
include('includes/connect_db.php');

session_start();
$id_a = $_SESSION['id_a'];

$req = $bdd->query("SELECT * FROM administrarteur");
$req_cat = $bdd->query("SELECT * FROM categorie ");
if (empty($id_a)) {
    header('Location:login-Administrateur.php');
} else {

?>


    <!doctype html>
    <html lang="en">


    <head>
        <meta charset="utf-8" />
        <title>Ajouter poste | Events </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesbrand" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/imgg.png">

        <!-- Bootstrap Css -->
        <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

    </head>

    <body data-sidebar="dark">

        <!-- Begin page -->
        <div id="layout-wrapper">

            <?php include('includes/header.php') ?>

            <!-- ========== Left Sidebar Start ========== -->
            <?php include('includes/nav.php') ?>
            <!-- Left Sidebar End -->

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-flex align-items-center justify-content-between">
                                    <h4 class="mb-0 font-size-18">gestion Postes</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">poste</a></li>
                                            <li class="breadcrumb-item active">Ajout poste </li>
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">

                                        <h4 class="card-title">Ajout poste</h4>
                                        <form action="Controller/AjoutPoste.php" method="post" enctype="multipart/form-data">

                                            


                                            <div class="form-group row">
                                                <label for="example-text-input" class="col-md-2 col-form-label">Nom de salle</label>
                                                <div class="col-md-10">
                                                    <input class="form-control" type="text" placeholder="Nom de salle" id="example-text-input" name="nom_salle">
                                                </div>
                                            </div>


                                            <div class="form-group row">
                                                <label for="example-month-input" class="col-md-2 col-form-label">Propriétaire de salle</label>
                                                <div class="col-md-10">
                                                    <input class="form-control" type="text" placeholder="Propriétaire de salle" id="example-text-input" name="nom_prop_salle">
                                                </div>
                                            </div>


                                            

                                            <div class="form-group row">
                                                <label for="example-month-input" class="col-md-2 col-form-label">Numero propriétaire de la salle</label>
                                                <div class="col-md-10">
                                                    <input class="form-control" type="text" placeholder="Numero propriétaire de la salle" id="example-text-input" name="numtel_salle">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-md-2 col-form-label">
                                                    <font style="vertical-align: inherit;">Type de poste </font>
                                                </label>
                                                <div class="col-md-10">
                                                    <select class="form-control" name="type_event">
                                                        <option disabled selected>
                                                            <font style="vertical-align: inherit;">sélectionnez type</font>
                                                        </option>
                                                        <?php
                                                        while ($donnees = $req_cat->fetch()) {

                                                        ?>
                                                            <option value="<?php echo $donnees['nom']; ?>">
                                                                <font style="vertical-align: inherit;"><?php echo $donnees['nom']; ?></font>
                                                            </option>
                                                        <?php } ?>
                                                    </select>
                                                </div>
                                            </div>








                                            <div class="form-group row">
                                                <p> Image de poste:</p>
                                                <div class="col-md-10">
                                                    <input name="file" type="file" id="fileToUpload">
                                                    <br>
                                                    <span id="upload_image"></span>

                                                </div>
                                            </div>




                                            <button type="submit" class="btn btn-primary waves-effect waves-light" style=" float: right;" onclick="type();">Ajouter</button>

                                        </form>

                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->


                    </div>
                    <!-- end row -->

                </div> <!-- container-fluid -->
            </div>
            <!-- End Page-content -->


            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6">
                            <script>
                                document.write(new Date().getFullYear())
                            </script> © Location
                        </div>
                        <div class="col-sm-6">
                            <div class="text-sm-right d-none d-sm-block">
                                Design & Develop by A°H
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
        <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->

        <!-- Right Sidebar -->
        
        <!-- /Right-bar -->

        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

        <!-- JAVASCRIPT -->
        <script src="assets/libs/jquery/jquery.min.js"></script>
        <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/libs/metismenu/metisMenu.min.js"></script>
        <script src="assets/libs/simplebar/simplebar.min.js"></script>
        <script src="assets/libs/node-waves/waves.min.js"></script>

        <script src="assets/js/app.js"></script>

    </body>


    
    <script>
        $(document).ready(function() {
            $(document).on('change', '#fileToUpload', function() {
                var property = document.getElementById("fileToUpload").files[0];
                var image_name = property.name;
                var image_extension = image_name.split('.').pop().toLowerCase();
                if (jQuery.inArray(image_extension, ['gif', 'png', 'jpg', 'jpeg']) == -1) {
                    alert("invalid image file");
                }
                var image_size = property.size;
                if (image_size > 200000) {
                    alert("image file is very big");
                } else {
                    var form_data = new FormData();
                    form_data.append("fileToUpload", property);
                    $.ajax({
                        url: "upload.php",
                        method: "POST",
                        data: form_data,
                        contentType: false,
                        cache: false,
                        processData: false,
                        beforeSend: function() {
                            $('#upload_image').html("<label class='text-success'>Uploding...</label");
                        },
                        success: function(data) {
                            $('#upload_image').html(data);
                        }
                    })
                }
            });
        });
    </script>

    </html>
<?php
}
?>