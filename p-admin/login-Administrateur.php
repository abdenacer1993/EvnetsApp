

<!doctype html>
<html lang="en">

    
<head>
        <meta charset="utf-8" />
        <title>Login Administrateur | Events </title>
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

    <body>
        <div class="home-btn d-none d-sm-block">
            <a href="login-Administrateur.php" class="text-dark"><i class="fas fa-home h2"></i></a>
        </div>


        



        <div class="account-pages my-5 pt-sm-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-5">
                        
                        <?php 
                            if (isset($_GET['result'])) {
                                if ($_GET['result']=='error') {
         
                        ?>
        <div class="alert alert-danger" role="alert">
          <strong>Login or Password Invalid !!</strong> .
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

                        <?php
                        }else{
                            ?>
                            <div></div>
                            <?php
                        }
                    }

                    ?>
                        
                        <div class="card overflow-hidden">
                            <div class="bg-soft-primary">
                                <div class="row">
                                    <div class="col-7">
                                        <div class="text-primary p-4">
                                            <h5 class="text-primary">Bienvenue !</h5>
                                            <p>Connectez-vous pour continuer à Events</p>
                                        </div>
                                    </div>
                                   
                                </div>
                            </div>
                            <div class="card-body pt-0"> 
                                <div>
                                    <a href="login-Administrateur.php">
                                        <div class="avatar-md profile-user-wid mb-4">
                                            <span class="avatar-title rounded-circle bg-light">
                                                <img src="assets/images/imgg.png" alt="" class="rounded-circle" height="34">
                                            </span>
                                        </div>
                                    </a>
                                </div>
                                <div class="p-2">
                                    <form class="form-horizontal" action="Controller/verifAdmin.php" method="post">
        
                                        <div class="form-group">
                                            <label for="username">Login</label>
                                            <input type="text" class="form-control" id="username" placeholder="login" name="login" required="required">
                                        </div>
                
                                        <div class="form-group">
                                            <label for="userpassword">Mot de passe</label>
                                            <input type="password" class="form-control" id="userpassword" placeholder="Entrer mot de passe" name="password" required="required">
                                        </div>
                
                                      
                                        
                                        <div class="mt-3">
                                            <button class="btn btn-primary btn-block waves-effect waves-light" type="submit">Connecter</button>
                                        </div>
            
                                        
                                    </form>
                                </div>
            
                            </div>
                        </div>
                        <div class="mt-5 text-center">
                            
                            <p>© <script>document.write(new Date().getFullYear())</script> Location développer <i class="mdi mdi-heart text-danger"></i> by A°H</p>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </body>

</html>
<script>
    
    $(".alert").alert('close');

</script>