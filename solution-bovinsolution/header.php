<div class="container-fluid">
    <div class="row">
        <div class="col-lg-3 bg-secondary d-none d-lg-block">
            <a href="#" class="navbar-brand w-100 h-100 m-0 p-0 d-flex align-items-center justify-content-center">
                <h1 class="m-0 display-0 text-primary">BovinSolution</h1>
            </a>
        </div>
        <div class="col-lg-9">
            <div class="row bg-dark d-none d-lg-flex">
                <div class="col-lg-7 text-left text-white">
                    <div class="h-100 d-inline-flex align-items-center border-right border-primary py-2 px-3">
                        <i class="fa fa-envelope text-primary mr-2"></i>
                        <small>contact@waxangarilabs.com</small>
                    </div>
                    <div class="h-100 d-inline-flex align-items-center py-2 px-2">
                        <i class="fa fa-phone-alt text-primary mr-2"></i>
                        <small>(+229) 63 10 00 10/ 67 58 96 31</small>
                    </div>
                </div>
                <div class="col-lg-5 text-right">
                    <div class="d-inline-flex align-items-center pr-2">
                        <a class="text-primary p-2" href="">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a class="text-primary p-2" href="">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a class="text-primary p-2" href="">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a class="text-primary p-2" href="">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a class="text-primary p-2" href="">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </div>
                </div>
            </div>
            <nav class="navbar navbar-expand-lg bg-white navbar-light p-0">
                <a href="#" class="navbar-brand d-block d-lg-none">
                    <h1 class="m-0 display-0 text-primary">BovinSolution</h1>
                </a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                    <div class="navbar-nav mr-auto py-0">
                        <a href="../index.php" class="nav-item nav-link <?php if($element_active == "index"): ?>active<?php endif; ?>">Accueil</a>
                        <a href="../about.php" class="nav-item nav-link <?php if($element_active == "about"): ?>active<?php endif; ?>">A Propos</a>
                        <div class="nav-item dropdown">
                            <a href="../service.php" class="nav-link <?php if($element_active == "solution"): ?>active<?php endif; ?> dropdown-toggle" data-toggle="dropdown">Solution</a>
                            <div class="dropdown-menu rounded-0 m-0">
                                <a href="../service.php" class="dropdown-item">Trouver un animalier</a>
                                <a href="../service.php" class="dropdown-item">Marchés de bétail</a>
                                <a href="../service.php" class="dropdown-item">Géolocalisation des sites de pâturage</a>
                                <a href="../service.php" class="dropdown-item">Achat de produits d'élevage</a>
                                <a href="../service.php" class="dropdown-item">Gestion de votre cheptel</a>
                            </div>
                        </div>
                        <a href="../tarifs.php" class="nav-item nav-link <?php if($element_active == "tarifs"): ?>active<?php endif; ?>">Tarifs</a>
                        <a href="../blog.php" class="nav-item nav-link <?php if($element_active == "blog"): ?>active<?php endif; ?>">Blog</a>
                        <a href="../contact.php" class="nav-item nav-link <?php if($element_active == "contact"): ?>active<?php endif; ?>">Contact</a>
                    </div>
                    <?php if(empty($_SESSION)){ ?>
                        <a href="../inscription.php" class="btn btn-primary mr-3 d-none d-lg-block">Commencer</a>
                        <a href="../connexion.php" class="btn btn-outline-secondary mr-3 d-none d-lg-block">Connexion</a>
                    <?php }else{ ?>
                        <div class="dropdown mx-5 px-5">
                            <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown"><i class="material-icons text-success">person_outlined</i></a>
                            <div class="dropdown-menu rounded-0 m-0">
                                <a href="../dashboardUser/pages/dashboard.php" class="dropdown-item">Dashboard</a>
                                <a href="../dashboardUser/pages/profile.php" class="dropdown-item">Profile</a>
                                <a href="../deconnexion.php" class="dropdown-item">Deconnexion</a>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </nav>
        </div>
    </div>
</div>