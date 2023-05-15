<?php
 include('includes/connect_db.php');
session_start();
$id = $_GET['id'];
$id_a=$_SESSION['id_a'];
 $req = $bdd->query("SELECT * FROM reclamation WHERE id = $id");
$donnees = $req->fetch();
?>
<!doctype html>
<html lang="en">

    

   <head>
        <meta charset="utf-8" />
        <title>Reclamation <?php echo $donnees['nom'] ?>| Events </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesbrand" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/imgg.png">
        <!-- Summernote css -->
        <link href="assets/libs/summernote/summernote-bs4.min.css" rel="stylesheet" type="text/css" />

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
                                    <h4 class="mb-0 font-size-18">Reclamation</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Reclamation</a></li>
                                            <li class="breadcrumb-item active">Reclamation Administrateur</li>
                                        </ol>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>     
                        <!-- end page title -->
                        <!-- Modal -->
                

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
        
                                        <h4 class="card-title">Reclamation Administrateur</h4>
                            
                              <div class="container" >
                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-md-2 col-form-label">Nom&Prenom</label>
                                            <div class="col-md-10">
                                                <p class=" col-form-label"><?php echo $donnees['nom']; ?></p>
                                            </div>
                                        </div>


                                       <div class="form-group row">
                                            <label for="example-text-input" class="col-md-2 col-form-label">Email</label>
                                            <div class="col-md-10">
                                                <p class="col-form-label"><?php echo $donnees['email'];?></p>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-md-2 col-form-label">Sujet</label>
                                            <div class="col-md-10">
                                                <p class=" col-form-label"><?php echo $donnees['sujet']?></p>
                                            </div>
                                        </div>
                                        
                                      
                                      <div class="form-group row">
                                            <label for="example-text-input" class="col-md-2 col-form-label">Message</label>
                                            <div class="col-md-10">
                                                <p class=" col-form-label"><?php echo $donnees['msg']?></p>
                                            </div>
                                        </div>
                                      <div class="form-group row">
                                            <label for="example-text-input" class="col-md-2 col-form-label">Date de réçu</label>
                                            <div class="col-md-10">
                                                <p class=" col-form-label"><?php echo $donnees['date']?></p>
                                            </div>
                                        </div>
                                     
                                       
                                       
                                     
                                       
                                     
                                        
                                       
                                        
                                        <button type="button" class="btn btn-primary waves-effect waves-light"  data-toggle="modal" data-target="#composemodal" style=" float: right;">Repondre</button>
                                    </div>   
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
               <!-- Modal -->
                <div class="modal fade" id="composemodal" tabindex="-1" role="dialog" aria-labelledby="composemodalTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        ::before
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="composemodalTitle">New Message</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                             <div class="modal-body">
                                <form method="post" action="mailto:<?php echo $donnees['email']?>?subject=subject&message=message">
                                    <div class="form-group">
                                        <input type="email" class="form-control" value="<?php echo $donnees['email']?>" readonly="readonly">
                                    </div>

                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Subject">
                                    </div>
                                    <div class="form-group">
                                        
                                        <div class="summernote">
                                            
                                            <h6>Hello Summer note</h6>
                                            <ul>
                                                <li>
                                                    Select a text to reveal the toolbar.
                                                </li>
                                                <li>
                                                    Edit rich document on-the-fly, so elastic!
                                                </li>
                                            </ul>
                                            <p>
                                                End of air-mode area
                                            </p>
                                                

                                        </div>
                                        
                                    </div>

                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Send <i class="fab fa-telegram-plane ml-1"></i></button>
                            </div>
                        </div>
                     </div>
                </div>
          

                
               <?php  include('includes/footer.php')?>
            </div>
            <!-- end main content-->

        
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
        
        <!-- Summernote js -->
        <script src="assets/libs/summernote/summernote-bs4.min.js"></script>

        <!-- email summernote init -->
        <script src="assets/js/pages/email-summernote.init.js"></script>

        <script src="assets/js/app.js"></script>

        

    </body>

</html>
<script>
 
 var d = new Date();
document.getElementById("datedemande").valueAsDate=d;

</script>
