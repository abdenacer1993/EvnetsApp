 <?php

    $id_a = $_SESSION['id_a'];
    $req15 = $bdd->query("SELECT * FROM administrateur where id=$id_a");
    $donnees15 = $req15->fetch();


    $req5 = $bdd->query("SELECT count(*) FROM reclamation where lu=0");
    $donnees5 = $req5->fetch();
    ?>
 <div class="vertical-menu">

     <div data-simplebar class="h-100">
         <div id="sidebar-menu">
             <!-- Left Menu Start -->
             <?php
                if ($donnees15['type'] == 'superadmin') {
                ?>
                 <ul class="metismenu list-unstyled" id="side-menu">
                     <li class="menu-title">Menu</li>

                     <li>
                         <a href="index.php" class="waves-effect">
                             <i class="bx bx-home-circle"></i><span class="badge badge-pill badge-info float-right"><?php echo $donnees5[0]; ?></span>
                             <span>Dashboard superAdmin</span>
                         </a>
                     </li>

                     <li>
                         <a href="javascript: void(0);" class="has-arrow waves-effect">
                             <i class="bx bx-user"></i>
                             <span>Administrateur</span>
                         </a>
                         <ul class="sub-menu" aria-expanded="false">
                             <li><a href="Liste-Administrateur.php">Liste Administrateur</a></li>
                             <li><a href="Ajout-Administrateur.php">Ajouter Administrateur</a></li>

                         </ul>
                     </li>




                     <li>
                         <a href="javascript: void(0);" class="has-arrow waves-effect">
                             <i class="bx bx-dialpad"></i>
                             <span>Catégorie</span>
                         </a>
                         <ul class="sub-menu" aria-expanded="false">
                             <li><a href="Liste-Categorie.php">Liste catégories</a></li>
                             <li><a href="Ajout-categorie.php">Ajouter catégorie</a></li>

                         </ul>
                     </li>


                     <li>
                         <a href="javascript: void(0);" class="has-arrow waves-effect">
                             <i class="dripicons-device-tablet"></i>
                             <span>Postes</span>
                         </a>
                         <ul class="sub-menu" aria-expanded="false">
                             <li><a href="Liste-Postes.php">Liste des postes</a></li>
                             <li><a href="Ajout-Poste.php">Ajouter poste</a></li>

                         </ul>
                     </li>



                     <li>
                         <a href="javascript: void(0);" class="has-arrow waves-effect">
                             <i class="bx bx-message-rounded-dots"></i>
                             <span>Reclamation</span>
                         </a>
                         <ul class="sub-menu" aria-expanded="false">
                             <li><a href="liste-msg.php">Liste des messages</a></li>
                             <!-- <li><a href="Ajout-msg.php">Ajouter message</a></li> -->

                         </ul>
                     </li>

                     <li>
                         <a href="javascript: void(0);" class="has-arrow waves-effect">
                             <i class="bx bx-add-to-queue"></i>
                             <span>Demandes postes</span>
                         </a>
                         <ul class="sub-menu" aria-expanded="false">
                             <li><a href="Demande-postes.php">Liste des demandes</a></li>


                         </ul>
                     </li>






                 </ul>
             <?php
                } else {
                ?>
                 <ul class="metismenu list-unstyled" id="side-menu">
                     <li class="menu-title">Menu</li>

                     <li>
                         <a href="index.php" class="waves-effect">
                             <i class="bx bx-home-circle"></i><span class="badge badge-pill badge-info float-right"><?php echo $donnees5[0]; ?></span>
                             <span>Dashboard simpleAdmin</span>
                         </a>
                     </li>






                     <li>
                         <a href="javascript: void(0);" class="has-arrow waves-effect">
                             <i class="bx bx-dialpad"></i>
                             <span>Catégorie</span>
                         </a>
                         <ul class="sub-menu" aria-expanded="false">
                             <li><a href="Liste-Categorie.php">Liste catégories</a></li>


                         </ul>
                     </li>


                     <li>
                         <a href="javascript: void(0);" class="has-arrow waves-effect">
                             <i class="dripicons-device-tablet"></i>
                             <span>Postes</span>
                         </a>
                         <ul class="sub-menu" aria-expanded="false">
                             <li><a href="Liste-Postes.php">Liste des postes</a></li>


                         </ul>
                     </li>



                     <li>
                         <a href="javascript: void(0);" class="has-arrow waves-effect">
                             <i class="bx bx-message-rounded-dots"></i>
                             <span>Reclamation</span>
                         </a>
                         <ul class="sub-menu" aria-expanded="false">
                             <li><a href="liste-msg.php">Liste des Reclamation</a></li>
                             <!-- <li><a href="Ajout-msg.php">Ajouter message</a></li> -->

                         </ul>
                     </li>








                 </ul>
             <?php
                }
                ?>
         </div>
     </div>
 </div>