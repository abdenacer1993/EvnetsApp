<?php
 include('includes/connect_db.php');
  session_start();
  $id_a = $_SESSION['id_a'];
 $req = $bdd->query("SELECT * FROM administrateur ");
?>
<!doctype html>
<html lang="en">

    
<head>
        <meta charset="utf-8" />
        <title>Administrateur | Events</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesbrand" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

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

           <?php  include('includes/header.php')?>

            <!-- ========== Left Sidebar Start ========== -->
            <?php  include('includes/nav.php')?>
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
                                    <h4 class="mb-0 font-size-18">Liste Administrateur</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Administrateur</a></li>
                                            <li class="breadcrumb-item active">Liste Administrateur</li>
                                        </ol>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>     
                        <!-- end page title -->

                                    
                            
                            <div class="col-lg-12">
                                <div class="card">




                                    <?php

                                        if (isset($_GET['naser'])) {
                                            if($_GET['naser']="oui"){
                                    
                                     ?>

                                 <div class="alert alert-success" role="alert">
                                  <strong>Administrateur</strong> ajouter avec succes.
                                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>

                                    <?php }
                                    }
                                     ?>





                                     <?php

                                        if (isset($_GET['firas'])) {
                                            if($_GET['firas']="ouiModif"){
                                    
                                     ?>

                                 <div class="alert alert-secondary" role="alert">
                                  <strong>Administrateur</strong> Modifier avec succes.
                                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>

                                    <?php }
                                    }
                                     ?>










                                    <div class="card-body">
                                        <h4 class="card-title">Liste Administrateur</h4>
                                           
                                        
                                        <div class="table-responsive">
                                            <table class="table table-dark mb-0">
        
                                                <thead>
                                                    <tr>
                                                        <th>ID</th>
                                                        <th>Nom</th>
                                                        <th>Login</th>
                                                        <th>Email</th>
                                                        <th>Type</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody> 
                                                    <?php while($donnees=$req->fetch())
                                                    {

                                                      ?>
                                                    <tr> 
                                                        <th scope="row"><?php echo $donnees['id'] ?></th>
                                                      
                                                        <td name="nom"><?php echo $donnees['nom'] ?></td>
                                                        <td name="login"><?php echo $donnees['login'] ?></td>
                                                        <td name="email"><?php echo $donnees['email'] ?></td>
                                                        <td name="type"><?php echo $donnees['type'] ?></td>
                                                        <td><a href="Modifier-Administrateur.php?id=<?php echo $donnees['id'] ?>" class="btn btn-success waves-effect waves-light">Modifier</a>

                                                            <a href="controller/SupprimerAdmin.php?id=<?php echo $donnees['id'] ?>"  class="btn btn-danger waves-effect waves-light" >Supprimer</a> 

                                                        </td>


                                                    </tr>
                                                   <?php } ?>
                                                </tbody>
                                            </table>
                                        </div>
        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->
        
                      
                        <!-- end row -->

                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->

                
                <?php  include('includes/footer.php')?>
            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->

        <!-- Right Sidebar -->
         <!-- end slimscroll-menu-->
        </div>
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

</html>
