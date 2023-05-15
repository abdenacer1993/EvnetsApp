<?php
 include('includes/connect_db.php');
 session_start();
  $id_a = $_SESSION['id_a']; 


$id = $_GET['id'];

 $req = $bdd->query("SELECT * FROM annonce WHERE id = $id");
$donnees = $req->fetch();
$req1 = $bdd->query("SELECT * FROM annonceur ");
 $req2 = $bdd->query("SELECT * FROM categorie ");
?>

?>
<!doctype html>
<html lang="en">

    
<head>
        <meta charset="utf-8" />
        <title>Annonce  <?php echo $donnees['titre'] ?> | Location</title>
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
                                    <h4 class="mb-0 font-size-18">gestion Annonce</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Annonce</a></li>
                                            <li class="breadcrumb-item active">Modifier Annonce</li>
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
        
                                    <h4 class="card-title">Modifier Annonce</h4></br>
                                    <form method="post" action="controller/ModifierAnnonce.php?id=<?php echo $donnees['id'] ?>" enctype="multipart/form-data">

                                            <div class="form-group row">
                                                <label class="col-md-2 col-form-label">Sélectionner</label>
                                            
                                                <div class="col-md-10">
                                                    <input class="form-control" type="text" value="<?php echo $donnees1['id'] ;?>"id="example-text-input" name="titre" readonly="readonly">
                                                </div>
                                                
                                            </div>
                                        
        
                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-md-2 col-form-label">Titre</label>
                                            <div class="col-md-10">
                                                <input class="form-control" type="text" value="<?php echo $donnees['titre']?>"id="example-text-input" name="titre">
                                            </div>
                                        </div>

                                        
                                        
                                      
                                       <div class="form-group row">
                                            <label for="example-description-input" class="col-md-2 col-form-label">Description</label>
                                            <div class="col-md-10">
                                                <input class="form-control" type="text" value="<?php echo $donnees['description']?>" id="example-description-input" name="description">
                                            </div>
                                        </div>

                                          <div class="form-group row">
                                            <label class="col-md-2 col-form-label">Sélectionner</label>
                                            <div class="col-md-10">
                                                <select class="form-control" name="id_categorie">
                                                    <option disabled selected>sélectionnez la catégorie</option>
                                                    <?php
                                                            while($donnees1=$req2->fetch())
                                                    {  
                                                        if($donnees1['id']==$donnees['id_categorie'])
                                                        {


                                                    ?>
                                                    <option value="<?php echo $donnees1['id']; ?>" selected><?php echo $donnees1['nom']; ?></option>
                                                   <?php }
                                                       else{
                                                    ?>

                                                     <option value="<?php echo $donnees1['id']; ?>"><?php echo $donnees1['nom']; ?></option>
                                                     <?php 
                                                        }}
                                                        ?>

                                                </select>
                                            </div>
                                        </div>


                                         <div class="form-group row">
                                            <label for="example-month-input" class="col-md-2 col-form-label">prix</label>
                                            <div class="col-md-10">
                                                <div class="input-group bootstrap-touchspin bootstrap-touchspin-injected">
                                                    <span class="input-group-btn input-group-prepend">
                                                        <button class="btn btn-primary bootstrap-touchspin-down" type="button" onclick="moins();">-</button>
                                                    </span>
                                                    <span class="input-group-addon bootstrap-touchspin-prefix input-group-prepend">
                                                        <span class="input-group-text">D.T</span>
                                                    </span>
                                              
                                                    <input data-toggle="touchspin" type="text" data-bts-prefix="D.T" class="form-control" id="prix" value="<?php echo $donnees['prix']; ?>" name="prix">
                                                    <span class="input-group-btn input-group-append">
                                                        <button class="btn btn-primary bootstrap-touchspin-up" type="button" onclick="plus();" >+</button>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>


                                                <div class="col-md-6">
                                                
                                                   <?php 
                                                   if($donnees['type']=="on"){
                                                    ?>
                                                        <input class="form-check-input" type="radio" name="type" id="exampleRadios1" value="on" checked >
                                                        <label class="form-check-label" for="exampleRadios1" style="vertical-align: inherit;">
                                                            
                                                            visible
                                                        </label>
                                                    <br>
                                                    
                                                        <input class="form-check-input" type="radio" name="type" id="exampleRadios2" value="off">
                                                        <label class="form-check-label" for="exampleRadios2" style="vertical-align: inherit;">
                                                            invisible
                                                        </label>
                                                        <?php
                                                         }
                                                         else{
                                                        ?>
                                                        
                                                        <input class="form-check-input" type="radio" name="type" id="exampleRadios1" value="on">
                                                        <label class="form-check-label" for="exampleRadios1" style="vertical-align: inherit;">
                                                            visible
                                                        </label>
                                                    <br>
                                                    
                                                        <input class="form-check-input" type="radio" name="type" id="exampleRadios2" value="off"  checked>
                                                        <label class="form-check-label" for="exampleRadios2" style="vertical-align: inherit;">
                                                            invisible
                                                        </label>
                                                    <?php } ?>
                                                
                                            </div>




                                        <div class="form-group row">
                                           <p>   Select image to upload:</p>

                                            <div class="col-md-10">
                                                
                                                <input  type="file" name="file" id="fileToUpload" >
                                                </br>
                                                <span id="upload_image"><img  name="oldpic" src="Controller/<?php echo $donnees['image']?>" width="200" height="150"></span>
                                            
                                            </div>
                                            
                                        </div>
                                     
                                       
                                       
                                     
                                       
                                     
                                        
                                       
                                        
                                        <button class="btn btn-success waves-effect waves-light" style=" float: right;">Modifier</button>
                                       
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

        <script src="assets/js/app.js"></script>

    </body>

<!-- Mirrored from themesbrand.com/skote/layouts/vertical/form-elements.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 07 Mar 2020 00:36:45 GMT -->
</html>
<script type="text/javascript">
    
     function plus()
    {   valeur=parseInt(document.getElementById("prix").value);
        document.getElementById("prix").value=valeur+1;
        
    }
     function moins()
    {  
     valeur=parseInt(document.getElementById("prix").value);
     if(valeur>0){
        document.getElementById("prix").value=valeur-1;
        }}
</script>


<script>
    $(document).ready(function(){
        $(document).on('change','#fileToUpload',function(){
            var property = document.getElementById("fileToUpload").files[0];
            var image_name = property.name;
            var image_extension = image_name.split('.').pop().toLowerCase();
            if (jQuery.inArray(image_extension,['gif','png','jpg','jpeg']) == -1) {
                alert("invalid image file");
            }
            var image_size = property.size;
            if (image_size > 200000) {
                alert("image file is very big");
            }
            else
            {
                var form_data = new FormData();
                form_data.append("fileToUpload",property);
                $.ajax({
                    url:"upload.php",
                    method:"POST",
                    data:form_data,
                    contentType:false,
                    cache:false,
                    processData:false,
                    beforeSend:function(){
                        $('#upload_image').html("<label class='text-success'>Uploding...</label");
                    },
                    success:function(data)
                    {
                        $('#upload_image').html(data);
                    }
                })
            }
        });
    });
    
</script>

