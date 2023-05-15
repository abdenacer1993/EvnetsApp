<?php
 include('includes/connect_db.php');
session_start();
  $id_a = $_SESSION['id_a']; 

$id_a = $_GET['id_a'];

$req = $bdd->query("SELECT * FROM administrateur WHERE id = $id_a");
$donnees = $req->fetch();

?>
<!doctype html>
<html lang="en">

    
<head>
        <meta charset="utf-8" />
        <title>Profil Adminstrateur | frip.tn</title>
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
        <link href="assets/css/pwd.css" rel="stylesheet" type="text/css" />

        <style type="text/css">
            .class_firas{
                background: gainsboro;
                /* position: absolute; */
                /* display: none; */
                /*position: absolute;
                right: 13px;
                top: 1px;*/
                padding: 12px;
            }
        </style>

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
                                    <h4 class="mb-0 font-size-18">Administrateur</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Administrateur</a></li>
                                            <li class="breadcrumb-item active">Profile Administrateur</li>
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
        
                                        <h4 class="card-title">Changer mot de passe Administrateur</h4>
                                        <form method="post" action="Controller/ModifierAdmin.php?id=<?php echo $donnees['id'] ?>&mdp=oui">
                                    </div>    
                                </div>

                                        <div class="form-group row" ng-app="show_hide_password" ng-controller="show_hide_password_controller" >
                                                <label  class="col-md-2 col-form-label">Mot de passe actuel</label>
                                                <div class="col-md-10" id="">
                                                    <div class="input-group" >
                                                <input type="{{inputType}}" name="password_an" required="required" class="form-control input-lg" ng-model="password_field" placeholder="Mot de passe actuel" />
       <span class="input-group-addon">
        <span class="{{showHideClass}}" ng-click="showPassword()" style="cursor:pointer"></span>
       </span>
       </div>
                                                

                                         </div>
                                       </div> 


                                        
                                        
                                      
                                       

                                        <div class="form-group row"  >
                                                <label  class="col-md-2 col-form-label">Nouveau mot de passe</label>
                                                <div class="col-md-10" id="">
                                                    <div class="input-group" >

                                                <input type="password" name="password" id="password" required="required" class="form-control input-lg" ng-model="password_field" placeholder="Nouveau mot de passe"  minlength="8" onkeyup='check();' />
       
                                                 </div>
                                                

                                         </div>
                                       </div> 

                                       <div class="form-group row" >
                                                <label  class="col-md-2 col-form-label">Confirmer le nouveau mot de passe</label>
                                            <div class="col-md-10" id="">
                                                    <div class="input-group" >
                                                <input type="password" name="confirm_password" id="confirm_password"  required="required" class="form-control input-lg" ng-model="password_field" placeholder="Confirmer le nouveau mot de passe" minlength="8" onkeyup='check();' />
                                                
       
                                                    </div><span id='message'></span>
                                                

                                            </div>
                                       </div> 
                                     
                                       
                                       
                                     
                                       
                                     
                                        
                                       
                                        
                                        <button class="btn btn-warning" style=" float: right;
                                        ">Changer mot de passe</button>
                                       
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
        <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.5.7/angular.min.js"></script>

        <script src="assets/js/app.js"></script>

    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $(".clic2").hide();

            $(".clic1").click(function() {

                $(".clic1").fadeOut('slow');
                $(".clic2").fadeIn('slow');


            });
            $(".clic2").click(function() {

                $(".clic2").fadeOut('slow');
                $(".clic1").fadeIn('slow');


            });
        });

        </script>

    </body>

</html>
<script>
 
 var app = angular.module('show_hide_password', []);

 app.controller('show_hide_password_controller', function($scope){

  $scope.inputType = 'password';
  $scope.showHideClass = 'bx bx-show-alt class_firas';

  $scope.showPassword = function(){
   if($scope.password_field != null)
   {
    if($scope.inputType == 'password')
    {
     $scope.inputType = 'text';
     $scope.showHideClass = 'bx bx-hide  class_firas';
    }
    else
    {
     $scope.inputType = 'password';
     $scope.showHideClass = 'bx bx-show-alt class_firas';
    }
   }
  };

 });

 var check = function() {
  if (document.getElementById('password').value ==
    document.getElementById('confirm_password').value) {
    document.getElementById('message').style.color = 'green';
    document.getElementById('message').innerHTML = 'Matching';
  } else {
    document.getElementById('message').style.color = 'red';
    document.getElementById('message').innerHTML = 'Not matching';
  }
}

</script>
