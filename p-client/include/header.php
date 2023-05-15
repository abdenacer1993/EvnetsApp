<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>


<div class="container-fluid nav-bar bg-transparent">
    <nav class="navbar navbar-expand-lg bg-white navbar-light py-0 px-4">
        <!-- Contenu commun de la barre de navigation -->
        <a href="index.php" class="navbar-brand d-flex align-items-center text-center">
            <div class="icon p-2 me-2">
                <img class="img-fluid" src="img/imgg.png" alt="Icon" style="width: 30px; height: 30px;">
            </div>
            <h1 class="m-0 text-primary me-2">Events</h1>
            <?php
                if (isset($_SESSION['id_a'])) {
                    // Navigation pour une session active
                ?>
                <p class="m-0 text-secondary" >Bienvenue <?php echo $_SESSION['nom']?></p>
                <?php 
                }
                ?>
            
        </a>
        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto">
                <a href="index.php" class="nav-item nav-link active">Home</a>

                <a href="contact.php" class="nav-item nav-link">Contact</a>

                <?php
                if (isset($_SESSION['id_a'])) {
                    // Navigation pour une session active
                ?>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Postes</a>
                        <div class="dropdown-menu rounded-0 m-0">
                            <a href="ajouterPosteClient.php" class="dropdown-item">Ajout poste</a>
                            <a href="mesPoste.php" class="dropdown-item">Mes postes</a>

                        </div>
                    </div>
                    <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle dropdown-toggle-split" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="bi bi-person-circle"></i>
                            </button>
                            <ul class="dropdown-menu ">
                                <li><a class="dropdown-item" href="ModifierCompteClient.php?id=<?php echo $_SESSION['id_a']?>">Modifier profile</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="Controller/deconnecter.php">Deconnecter</a></li>
                            </ul>
                        </div>
                    </div>
                <?php
                } else {
                    // Navigation pour une session inactive
                ?>
                    <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="bi bi-person-circle"></i>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-dark">
                                <li><a class="dropdown-item" href="loginRegistre.php">Login/Inscrit</a></li>

                            </ul>
                        </div>
                    </div>
                <?php
                }
                ?>
            </div>
        </div>
    </nav>
</div>
