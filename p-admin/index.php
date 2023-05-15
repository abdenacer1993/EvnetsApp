<?php
include('includes/connect_db.php');
session_start();
  $id = $_SESSION['id_a']; 

   $req = $bdd->query("SELECT * FROM administrateur WHERE id= $id");
   
   $req11 = $bdd->query("SELECT count(*) FROM administrateur where type='superadmin'" );
   $donnees11 = $req11->fetch();
   $req7 = $bdd->query("SELECT count(*) FROM administrateur where type='simpleadmin' " );
   $donnees7 = $req7->fetch();
//    $req8 = $bdd->query("SELECT count(*) FROM pub where type='on'" );
//    $donnees8 = $req8->fetch();
//    $req9 = $bdd->query("SELECT count(*) FROM annonce where type='on'" );
//    $donnees9 = $req9->fetch();
//    $req10 = $bdd->query("SELECT * FROM verification Order by id DESC limit 2 " );
   $reqmsg = $bdd->query("SELECT count(*) FROM reclamation" );
   $donneesmsg = $reqmsg->fetch();

   

if (empty($_SESSION['id_a'])) {
header('Location:login-Administrateur.php');
}else{

?>




<!doctype html>
<html lang="en">

    
<head>
        <meta charset="utf-8" />
        <title>Dashboard | Events</title>
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
            
            <!-- ========== Left Sidebar Start ========== -->
            <?php include('includes/header.php')?>


        <!--- Sidemenu -->
       <?php include('includes/nav.php')?>
        <!-- Sidebar -->
 
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
                                    <h4 class="mb-0 font-size-18">Dashboard</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item active">Welcome to Dashboard</li>
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-xl-4">
                                <div class="card overflow-hidden">
                                    <div class="bg-soft-primary">
                                        <div class="row">
                                            <div class="col-7">
                                                <div class="text-primary p-3">
                                                    <h5 class="text-primary">Welcome Back !</h5>
                                                    <p>Enents Dashboard</p>
                                                </div>
                                            </div>
                                            <div class="col-5 align-self-end">
                                                <img src="assets/images/profile-img.png" alt="" class="img-fluid">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body pt-0">
                                        <?php 
                                        $donnees = $req->fetch();
                                        ?>
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <div class="avatar-md profile-user-wid mb-4">
                                                    <img src="assets/images/avtar.jpg" class="img-thumbnail rounded-circle">
                                                </div>
                                                <h5 class="font-size-15 text-truncate">Email</h5>
                                                <p class="text-muted mb-0 text-truncate"><?php echo $donnees['email'] ?></p>
                                            </div>

                                            <div class="col-sm-8">
                                                <div class="pt-4">

                                                    <div class="row">
                                                        <div class="col-6">
                                                            <h5 class="font-size-15">Login</h5>
                                                            <p class="text-muted mb-0"><?php echo $donnees['login'] ?></p>
                                                        </div>
                                                        <div class="col-6">
                                                            <h5 class="font-size-15">Nom et prénom</h5>
                                                            <p class="text-muted mb-0"><?php echo $donnees['nom'] ?></p>
                                                        </div>
                                                    </div>
                                                    <div class="mt-4">
                                                        <a href="Profil-Administrateur.php?id_a=<?php echo $donnees['id'] ?>" class="btn btn-primary waves-effect waves-light btn-sm">View Profile <i class="mdi mdi-arrow-right ml-1"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title mb-4">Liste des demandes</h4>
                                        <div class="row">
                                             <?php //while($donnees10=$req10->fetch())
                                                //{
                                                ?> 
                                            <div class="col-sm-6">
                                                <p class="text-muted">Aujourd'hui</p>
                                                <p><?php //echo $donnees10['nom']." ".$donnees10['prenom'];?></p>
                                                <p class="text-muted"><span class="text-success mr-2"> <?php //echo $donnees10['tel'] ;?> </span>  <br> <?php //echo $donnees10['email'];?></p>

                                                
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="mt-4 mt-sm-0">
                                                	<br>
                                                	<br>
                                                   <a href="Controller/Invistisseur_accepter.php?id=<?php //echo $donnees10['id']?>"  id="page-header-notifications-dropdown" class="btn header-item noti-icon waves-effect">
                                                    <i class="mdi mdi-plus-box-multiple-outline font-size-24 btn-success waves-effect waves-light"></i></a>


                                                    <a href="Controller/Invistisseur_refuse.php?id=<?php //echo $donnees10['id'];?>" class="btn header-item noti-icon waves-effect" id="page-header-notifications-dropdown">
                                                    <i class="mdi mdi-minus-box-multiple-outline font-size-24 btn-danger waves-effect waves-light"></i></a>
 

                                

                                                            
                                

                                                </div>
                                            </div>
                                             <?php //} ?> 
                                        </div>
                                        <div class="mt-4">
                                                     <a href="Demande-Invistisseur.php" class="btn btn-primary waves-effect waves-light btn-sm">Voir plus <i class="mdi mdi-arrow-right ml-1"></i></a>
                                                 
                                                 </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-8">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="card mini-stats-wid">
                                            <div class="card-body">
                                                <div class="media">
                                                    <div class="media-body">
                                                        <p class="text-muted font-weight-medium">Super administrateur</p>
                                                         <h4 class="mb-0"><?php echo $donnees11[0];?></h4> 
                                                    </div>

                                                    <div class="mini-stat-icon avatar-sm rounded-circle bg-primary align-self-center">
                                                        <span class="avatar-title">
                                                            <i class="bx bx-user-circle font-size-24"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="card mini-stats-wid">
                                            <div class="card-body">
                                                <div class="media">
                                                    <div class="media-body">
                                                        <p class="text-muted font-weight-medium">Simple administrateur</p>
                                                         <h4 class="mb-0"><?php echo $donnees7[0];?></h4> 
                                                    </div>

                                                    <div class="mini-stat-icon avatar-sm rounded-circle bg-primary align-self-center">
                                                        <span class="avatar-title">
                                                            <i class="bx bx-user-circle font-size-24"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="card mini-stats-wid">
                                            <div class="card-body">
                                                <div class="media">
                                                    <div class="media-body">
                                                        <p class="text-muted font-weight-medium">Annonces</p>
                                                        <h4 class="mb-0">nbr annonce</h4> 
                                                    </div>

                                                    <div class="avatar-sm rounded-circle bg-primary align-self-center mini-stat-icon">
                                                        <span class="avatar-title rounded-circle bg-primary">
                                                            <i class="dripicons-device-tablet font-size-24"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="card mini-stats-wid">
                                            <div class="card-body">
                                                <div class="media">
                                                    <div class="media-body">
                                                        <p class="text-muted font-weight-medium">Publicités</p>
                                                        <h4 class="mb-0">nbr pub</h4>
                                                    </div>

                                                    <div class="avatar-sm rounded-circle bg-primary align-self-center mini-stat-icon">
                                                        <span class="avatar-title rounded-circle bg-primary">
                                                            <i class="dripicons-flashlight font-size-24"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="card mini-stats-wid">
                                            <div class="card-body">
                                                <div class="media">
                                                    <div class="media-body">
                                                        <p class="text-muted font-weight-medium">Liste message</p>
                                                        <h4 class="mb-0"><?php echo $donneesmsg[0]; ?></h4> 
                                                    </div>

                                                    <div class="avatar-sm rounded-circle bg-primary align-self-center mini-stat-icon">
                                                        <span class="avatar-title rounded-circle bg-primary">
                                                            <i class="dripicons-flashlight font-size-24"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end row -->

                          
                            </div>
                        </div>
                        <!-- end row -->

                        
                        <!-- end row -->

                        
                        <!-- end row -->
                    </div>
                    <!-- container-fluid -->
                </div>
                <!-- End Page-content -->

                <!-- Modal -->
                
                <!-- end modal -->

               <?php include('includes/footer.php') ?>
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

        <!-- apexcharts -->
        <script src="assets/libs/apexcharts/apexcharts.min.js"></script>

        <script src="assets/js/pages/dashboard.init.js"></script>

        <script src="assets/js/app.js"></script>
    </body>


</html>
<?php 
} 
?>