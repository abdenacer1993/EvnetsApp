<?php
 include('includes/connect_db.php');
 session_start();
  //$id_a = $_SESSION['id_a']; 


 $req = $bdd->query("SELECT * FROM postes ");
 if (empty($_SESSION['id_a'])){

    header('Location:login-Administrateur.php');
}else{
?>
<!DOCTYPE html>
<html lang="fr">

    
<head>
        <meta charset="utf-8" />
        <title>Poste | Events</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="type_event" />
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
                                    <h4 class="mb-0 font-size-18">Gestion Poste</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Poste</a></li>
                                            <li class="breadcrumb-item active">Gestion Poste</li>
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
                                  <strong>Poste</strong> ajouter avec succes.
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
                                  <strong>Poste</strong> Modifier avec succes.
                                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>

                                    <?php }
                                    }
                                     ?>










                                    <div class="card-body">
                                        <h4 class="card-title">Liste Poste</h4>
                                           
                                        
                                        <div class="table-responsive">
                                            <table class="table table-dark mb-0">
        
                                                <thead>
                                                    <tr>
                                                        
                                                        <th>Nom de salle</th>
                                                        <th>Nom Propriétaire</th>
                                                        
                                                        <th>Type </th>
                                                        <th>Numero telephone</th>
                                                        <th>Etat</th>
                                                        <th>Image</th>
                                                        
                                                    </tr>
                                                </thead>
                                                <tbody> 
                                                    <?php while($donnees=$req->fetch())
                                                    {

                                                      ?>
                                                    <tr> 
                                                        
                                                        <td name="nom_salle"><?php echo $donnees['nom_salle'] ?></td>
                                                        <td name="nom"><?php echo $donnees['nom_prop_salle'] ?></td>
                                                        
                                                        <td name="type_event"><?php echo $donnees['type_event'] ?></td>
                                                        <td name="numtel_salle"><?php echo $donnees['numtel_salle'] ?></td>
                                                        <td name="etat"><?php echo $donnees['etat'] ?></td>
                                                        <td name="image"><img src="../p-client/Controller/<?php echo $donnees['image'] ?>" width="150" heigth="150"></td>
                                                        
                                                        <td><a href="Modifier-Poste?id=<?php echo $donnees['id'] ?>" class="btn btn-success waves-effect waves-light">Modifier</a>

                                                            <a href="controller/SupprimerPoste?id=<?php echo $donnees['id'] ?>"  class="btn btn-danger waves-effect waves-light" >Supprimer</a> 

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
        <div class="right-bar">
            <div data-simplebar class="h-100">
                <div class="rightbar-title px-3 py-4">
                    <a href="javascript:void(0);" class="right-bar-toggle float-right">
                        <i class="mdi mdi-close noti-icon"></i>
                    </a>
                    <h5 class="m-0">Settings</h5>
                </div>

                <!-- Settings -->
                <hr class="mt-0" />
                <h6 class="text-center mb-0">Choose Layouts</h6>

                <div class="p-4">
                    <div class="mb-2">
                        <img src="assets/images/layouts/layout-1.jpg" class="img-fluid img-thumbnail" alt="">
                    </div>
                    <div class="custom-control custom-switch mb-3">
                        <input type="checkbox" class="custom-control-input theme-choice" id="light-mode-switch" checked />
                        <label class="custom-control-label" for="light-mode-switch">Light Mode</label>
                    </div>
    
                    <div class="mb-2">
                        <img src="assets/images/layouts/layout-2.jpg" class="img-fluid img-thumbnail" alt="">
                    </div>
                    <div class="custom-control custom-switch mb-3">
                        <input type="checkbox" class="custom-control-input theme-choice" id="dark-mode-switch" data-bsStyle="assets/css/bootstrap-dark.min.css" data-appStyle="assets/css/app-dark.min.css" />
                        <label class="custom-control-label" for="dark-mode-switch">Dark Mode</label>
                    </div>
    
                    <div class="mb-2">
                        <img src="assets/images/layouts/layout-3.jpg" class="img-fluid img-thumbnail" alt="">
                    </div>
                    <div class="custom-control custom-switch mb-5">
                        <input type="checkbox" class="custom-control-input theme-choice" id="rtl-mode-switch" data-appStyle="assets/css/app-rtl.min.css" />
                        <label class="custom-control-label" for="rtl-mode-switch">RTL Mode</label>
                    </div>

            
                </div>

            </div> <!-- end slimscroll-menu-->
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
<?php 
}
?>
