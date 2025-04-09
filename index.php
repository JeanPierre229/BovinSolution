<?php 
    session_start();
    $element_active = "index";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Accueil BovinSolution | WaxangariLabs</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/img-peulh/bovinsolution.png" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

    <!-- Materials icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<style>
    #hidepopup, #hidepopupmb{
        display: none;
    }
    .bg-gray {
        background-color: #e6e6e6;
    }
    /* Pop-up overlay with blur effect */
    .pop-up-overlay {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.5);
        display: flex;
        justify-content: center;
        align-items: center;
        z-index: 1000;
        backdrop-filter: blur(10px); /* Floute l'arrière-plan */
    }
    /* Style de la carte avec ombre et mise en avant */
    .pop-up-content .card {
        background-color: white;
        border-radius: 15px;
        padding: 20px;
        box-shadow: 0px 4px 20px rgba(0, 0, 0, 0.1); /* Ombre douce autour de la carte */
        z-index: 1001;
        width: 700px;
        text-align: center;
        position: relative;
    }
    .pop-up-content h5 {
        font-size: 1.5rem;
        font-weight: bold;
        color: #28a745; /* Texte vert pour le titre */
    }
    .bg-gradient-primary{
        background-image: linear-gradient(310deg, #ffc107 0%, #28a745 100%);
    }
    .btn-default{
        background-color: #ffc107;
        color: white;
        border: none;
        transition: background-color 0.3s ease-in-out;
    }
    .h-edit{
        height: 100px;
    }
</style>

<body>
    <!-- Header Start -->
    <?php require "header.php"; ?>
    <!-- Header End -->


    <!-- Carousel Start -->
    <div class="container-fluid p-0">
        <div id="header-carousel" class="carousel slide carousel-fade" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#header-carousel" data-slide-to="0" class="active"></li>
                <li data-target="#header-carousel" data-slide-to="1"></li>
                <li data-target="#header-carousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="img-fluid" src="img/img-peulh/img-header.png" alt="Image">
                    <div class="carousel-caption d-flex align-items-center justify-content-center">
                        <div class="p-5" style="width: 100%; max-width: 900px;">
                            <h1 class="display-3 text-white mb-md-4">Trouvez l'animalier peulh fiable et compétent.</h1>
                            <?php if(empty($_SESSION)){ ?>
                                <a href="inscription.php" class="btn btn-primary">Commencer</a>
                            <?php }else{ ?>
                                <a href="service.php" class="btn btn-primary">Trouver le Service</a>
                            <?php } ?>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="img-fluid" src="img/img-peulh/paturage1.png" alt="Image">
                    <div class="carousel-caption d-flex align-items-center justify-content-center">
                        <div class="p-5" style="width: 100%; max-width: 900px;">
                            <h1 class="display-3 text-white mb-md-4">Ayez votre cheptel sans posséder de ferme.</h1>
                            <?php if(empty($_SESSION)){ ?>
                                <a href="inscription.php" class="btn btn-primary">Commencer</a>
                            <?php }else{ ?>
                                <a href="service.php" class="btn btn-primary">Trouver le Service</a>
                            <?php } ?>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="img-fluid" src="img/img-peulh/new-img.png" alt="Image">
                    <div class="carousel-caption d-flex align-items-center justify-content-center">
                        <div class="p-5" style="width: 100%; max-width: 900px;">
                            <h1 class="display-3 text-white mb-md-4">Achetez des produits bovins où que vous soyez.</h1>
                            <?php if(empty($_SESSION)){ ?>
                                <a href="inscription.php" class="btn btn-primary">Commencer</a>
                            <?php }else{ ?>
                                <a href="service.php" class="btn btn-primary">Trouver le Service</a>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- Contact Info Start -->
    <div class="container-fluid pb-5 contact-info">
        <div class="row">
            <div class="col-lg-4 p-0">
                <div class="contact-info-item d-flex align-items-center justify-content-center bg-primary text-white py-4 py-lg-0">
                    <i class="fa fa-3x fa-map-marker-alt text-secondary mr-4"></i>
                    <div class="">
                        <h5 class="mb-2">Notre Localisation</h5>
                        <p class="m-0">Parakou, Ladjifarani</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 p-0">
                <div class="contact-info-item d-flex align-items-center justify-content-center bg-secondary text-white py-4 py-lg-0">
                    <i class="fa fa-3x fa-envelope-open text-primary mr-4"></i>
                    <div class="">
                        <h5 class="mb-2">Notre Email</h5>
                        <p class="m-0">contact@waxangarilabs.com</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 p-0">
                <div class="contact-info-item d-flex align-items-center justify-content-center bg-primary text-white py-4 py-lg-0">
                    <i class="fa fa-3x fa-phone-alt text-secondary mr-4"></i>
                    <div class="">
                        <h5 class="mb-2">Appelez Nous</h5>
                        <p class="m-0">(+229) 63 10 00 10/ 67 58 96 31</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact Info End -->


    <!-- About Start -->
    <div class="container-fluid py-5 mb-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="d-flex flex-column align-items-center justify-content-center bg-about rounded h-100 py-5 px-3">
                        <i class="fa fa-5x fa-award text-primary mb-4"></i>
                        <h1 class="display-2 text-white mb-2" data-toggle="counter-up">5</h1>
                        <h2 class="text-white m-0">Années d'Experiences</h2>
                    </div>
                </div>
                <div class="col-lg-7 pt-5 pb-lg-5">
                    <h6 class="text-secondary font-weight-semi-bold text-uppercase mb-3">A propos de nous</h6>
                    <h1 class="mb-4 section-title">Reçevez les meilleurs services d'élevage</h1>
                    <h5 class="text-muted font-weight-normal mb-3">BovinSolution est une application mobile et web dédiée à faciliter l'accès aux services de pâturage de bovins, à la recherche d'animaliers peulhs, à la géolocalisation des sites d'élevage et des bovins en pâturage, ainsi qu'à l'achat de produits d'élevage de bovins.</h5>
                    <div class="d-flex align-items-center pt-4">
                        <a href="" class="btn btn-primary mr-5">En savoir plus</a>
                        <button type="button" class="btn-play" data-toggle="modal"
                            data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-target="#videoModal">
                            <span></span>
                        </button>
                        <h5 class="font-weight-normal text-white m-0 ml-4 d-none d-sm-block">Lire la vidéo</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Video Modal Start -->
    <div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>        
                    <!-- 16:9 aspect ratio -->
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="" id="video"  allowscriptaccess="always" allow="autoplay"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Video Modal End -->


    <!-- Services Start -->
    <div class="container-fluid bg-service py-5" id="service">
        <div class="container py-5">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h6 class="text-secondary font-weight-semi-bold text-uppercase mb-3">Nos Solutions</h6>
                    <h1 class="mb-4 section-title text-white">Nos solutions</h1>
                    <p class="text-white">Accédez à un répertoire complet des principaux marchés de bétail de la région. Consultez les horaires, les tarifs et les animaux disponibles.</p>
                    <a href="service.php" class="btn btn-primary mt-3 py-2 px-4">Plus de solutions</a>
                </div>
                <div class="col-lg-6 pt-5 pt-lg-0">
                    <div class="owl-carousel service-carousel position-relative">
                        <div class="d-flex flex-column align-items-center text-center bg-light rounded overflow-hidden pt-4">
                            <a href="#" onclick="<?php if(!empty($_SESSION['nom'])){ ?>showPopUp()<?php }else{?>redirectToUrl()<?php }?>">
                                <div class="icon-box bg-light text-secondary shadow mt-2 mb-4">
                                    <i class="fa fa-2x fa-search"></i>
                                </div>
                            </a>
                            <h5 class="font-weight-bold mb-4 px-4">Animalier</h5>
                            <img src="img/img-peulh/portfolio-1.jpg" alt="">
                        </div>
                        <div class="d-flex flex-column align-items-center text-center bg-light rounded overflow-hidden pt-4">
                            <a href="#" onclick="<?php if(!empty($_SESSION['nom'])){ ?>showPopUpMb()<?php }else{?>redirectToUrl()<?php }?>">
                                <div class="icon-box bg-light text-secondary shadow mt-2 mb-4">
                                    <i class="fa fa-2x fa-store"></i>
                                </div>
                            </a>
                            <h5 class="font-weight-bold mb-4 px-4">Marché de bétails</h5>
                            <img src="img/img-peulh/portfolio-2.jpg" alt="">
                        </div>
                        <div class="d-flex flex-column align-items-center text-center bg-light rounded overflow-hidden pt-4">
                            <a href="#">
                                <div class="icon-box bg-light text-secondary shadow mt-2 mb-4">
                                    <i class="fa fa-2x fa-map-marker-alt"></i>
                                </div>
                            </a>
                            <h5 class="font-weight-bold mb-4 px-4">Géolocalisation</h5>
                            <img src="img/img-peulh/portfolio-3.jpg" alt="">
                        </div>
                        <div class="d-flex flex-column align-items-center text-center bg-light rounded overflow-hidden pt-4">
                            <a href="#">
                                <div class="icon-box bg-light text-secondary shadow mt-2 mb-4">
                                    <i class="fa fa-2x fa-money-bill-alt"></i>
                                </div>
                            </a>
                            <h5 class="font-weight-bold mb-4 px-4">Achat des produits</h5>
                            <img src="img/img-peulh/portfolio-4.jpg" alt="">
                        </div>
                        <div class="d-flex flex-column align-items-center text-center bg-light rounded overflow-hidden pt-4">
                            <a href="#">
                                <div class="icon-box bg-light text-secondary shadow mt-2 mb-4">
                                    <i class="fa fa-2x fa-user-friends"></i>
                                </div>
                            </a>
                            <h5 class="font-weight-bold mb-4 px-4">Cheptel</h5>
                            <img src="img/img-peulh/portfolio-5.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Services End -->

    <!-- Pop Up Start Party -->
    <section id="hidepopup">
        <div class="pop-up-overlay">
            <div class="pop-up-content">
            <div class="card">
                <div class="card-header">
                <h5 class="card-title mb-0 text-center mb-3">Formulaire de demande de service</h5>
                <form action="#" method="post" class="text-left">
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="region" class="form-label">Votre région:</label>
                            <select class="form-control" id="region" name="region" required>
                                <option value="Atacora">Atacora (coming soon)</option>
                                <option value="Alibori">Alibori (coming soon)</option>
                                <option value="Borgou">Borgou</option>
                                <option value="Donga">Donga (coming soon)</option>
                                <option value="Couffo">Couffo (coming soon)</option>
                                <option value="Collines">Collines (coming soon)</option>
                                <option value="Zou">Zou (coming soon)</option>
                                <option value="Plateau">Plateau (coming soon)</option>
                                <option value="Littoral">Littoral (coming soon)</option>
                                <option value="Oueme">Oueme (coming soon)</option>
                                <option value="Mono">Mono (coming soon)</option>
                                <option value="Atlantique">Atlantique (coming soon)</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="ethnie" class="form-label">L'ethnie du/des peulh(s):</label>
                            <input type="text" class="form-control" id="ethnie" name="ethnie" placeholder="Ethnie du/des peulh(s)..." required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="sexe" class="form-label">Sexe du/des peulh(s):</label>
                            <select class="form-control" id="sexe" name="sexe" required>
                                <option value="Homme">Homme</option>
                                <option value="Femme">Femme</option>
                                <option value="Les Deux Sexes">Les Deux Sexes</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="budget" class="form-label">Budget à allouer (en XOF):</label>
                            <input type="number" value="70000" min="50000" step="10000" class="form-control" id="budget" name="budget" required>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="nombrePeulh" class="form-label">Nombre de Peulh(s):</label>
                        <input type="number" min="1" class="form-control" id="nombrePeulh" name="nombrePeulh" required>
                    </div>
                    <div class="mb-3">
                        <label for="horaire" class="form-label">Horaire de Travail:</label>
                        <select class="form-control" id="horaire" name="horaire" required>
                            <option value="Matin(8h-12h)">Matin(8h-12h)</option>
                            <option value="Soir(15h-19h)">Soir(15h-19h)</option>
                            <option value="Plein Temps">Plein Temps</option>
                        </select>
                    </div>
                    <div class="">
                        <div class="row">
                            <div class="col mt-3">
                                <button class="btn btn-success px-5">Demander</button>
                            </div>
                            <div class="col mt-3 text-right">
                                <a href="" onclick="redirectToUrlIndex()" class="btn btn-default px-5">Annuler</a>
                            </div>
                        </div>
                    </div>
                </form>
                </div>
            </div>
            </div>
        </div>
    </section>
    <!-- Pop Up End Party -->

    <!-- Pop Up Start Party -->
    <section id="hidepopupmb">
        <div class="pop-up-overlay">
            <div class="pop-up-content">
            <div class="card">
                <div class="card-header">
                <h5 class="card-title mb-0 text-center mb-3">Formulaire de demande de service</h5>
                <form action="#" method="post" class="text-left">
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="region" class="form-label">Votre région:</label>
                            <select class="form-control" id="region" name="region" required>
                                <option value="Atacora">Atacora (coming soon)</option>
                                <option value="Alibori">Alibori (coming soon)</option>
                                <option value="Borgou">Borgou</option>
                                <option value="Donga">Donga (coming soon)</option>
                                <option value="Couffo">Couffo (coming soon)</option>
                                <option value="Collines">Collines (coming soon)</option>
                                <option value="Zou">Zou (coming soon)</option>
                                <option value="Plateau">Plateau (coming soon)</option>
                                <option value="Littoral">Littoral (coming soon)</option>
                                <option value="Oueme">Oueme (coming soon)</option>
                                <option value="Mono">Mono (coming soon)</option>
                                <option value="Atlantique">Atlantique (coming soon)</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="type_betails" class="form-label">Le type de bétails recherché:</label>
                            <input type="text" class="form-control" id="type_betails" name="type_betails" placeholder="Type de bétails recherchés..." required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="type_age" class="form-label">Un type d'âge:</label>
                            <select class="form-control" id="type_age" name="type_age" required>
                                <option value="non">Non</option>
                                <option value="jeunes">Plus jeune</option>
                                <option value="adultes">Bétails adultes</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="budget" class="form-label">Budget approximatif (en XOF):</label>
                            <input type="number"value="70000"  min="50000" step="10000" class="form-control" id="budget" name="budget" required>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="assistance" class="form-label">Assistance transport ou logistique:</label>
                        <select class="form-control" id="assistance" name="assistance" required>
                            <option value="Oui">Oui, je le veux</option>
                            <option value="Non">Non, pas la peine</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="recommandation" class="form-label">Recommandation d'éleveurs:</label>
                        <select class="form-control" id="recommandation" name="recommandation" required>
                            <option value="Oui">Oui, je le veux</option>
                            <option value="Non">Non, pas la peine</option>
                        </select>
                    </div>
                    <div class="">
                        <div class="row">
                            <div class="col mt-3">
                                <button class="btn btn-success px-5">Demander</button>
                            </div>
                            <div class="col mt-3 text-right">
                                <a href="" onclick="redirectToUrlIndex()" class="btn btn-default px-5">Annuler</a>
                            </div>
                        </div>
                    </div>
                </form>
                </div>
            </div>
            </div>
        </div>
    </section>
    <!-- Pop Up End Party -->

    <!-- Features Start -->
    <div class="container-fluid bg-light py-5">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-7 pt-lg-5 pb-3">
                    <h6 class="text-secondary font-weight-semi-bold text-uppercase mb-3">Pourquoi nous choisir ?</h6>
                    <h1 class="mb-4 section-title">Votre solution clé en main pour une activité d'élevage bovine réussie</h1>
                    <p class="mb-4">Notre plateforme ne travaille qu'avec des animaliers peulhs rigoureusement sélectionnés et certifiés. Chacun d'entre eux a été évalué sur ses compétences techniques, son expérience et son intégrité afin de vous garantir des prestations de qualité.</p>
                    <div class="row">
                        <div class="col-sm-4">
                            <h1 class="text-secondary mb-2" data-toggle="counter-up">225</h1>
                            <h6 class="font-weight-semi-bold mb-sm-4">Nos Eleveur</h6>
                        </div>
                        <div class="col-sm-4">
                            <h1 class="text-secondary mb-2" data-toggle="counter-up">1050</h1>
                            <h6 class="font-weight-semi-bold mb-sm-4">Nos Clients</h6>
                        </div>
                        <div class="col-sm-4">
                            <h1 class="text-secondary mb-2" data-toggle="counter-up">2500</h1>
                            <h6 class="font-weight-semi-bold mb-sm-4">Travaux éffectués</h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5" style="min-height: 400px;">
                    <div class="position-relative h-100 rounded overflow-hidden">
                        <img class="position-absolute w-100 h-100" src="img/img-peulh/troupe.jpeg" style="object-fit: cover;">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Features End -->


    <!-- Portfolio Start -->
    <div class="container-fluid bg-portfolio py-5">
        <div class="container py-5">
            <div class="row m-0 portfolio-container">
                <div class="col-lg-4 col-md-6 col-sm-12 p-0 portfolio-item">
                    <div class="position-relative overflow-hidden">
                        <div class="portfolio-img h-edit">
                            <img class="img-fluid w-100" src="img/img-peulh/portfolio/abreuvage.jpeg" alt="">
                        </div>
                        <div class="portfolio-text bg-primary">
                            <h4 class="font-weight-bold mb-4">Abreuvage</h4>
                            <div class="d-flex align-items-center justify-content-center">
                                <a class="btn btn-sm btn-secondary m-1" href="">
                                    <i class="fa fa-link"></i>
                                </a>
                                <a class="btn btn-sm btn-secondary m-1" href="img/img-peulh/portfolio-1.jpg" data-lightbox="portfolio">
                                    <i class="fa fa-eye"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 p-0 portfolio-item">
                    <div class="position-relative overflow-hidden">
                        <div class="portfolio-img h-edit">
                            <img class="img-fluid w-100" src="img/img-peulh/portfolio/extraction de lait.jpg" alt="">
                        </div>
                        <div class="portfolio-text bg-primary">
                            <h4 class="font-weight-bold mb-4">Lait Concentré</h4>
                            <div class="d-flex align-items-center justify-content-center">
                                <a class="btn btn-sm btn-secondary m-1" href="">
                                    <i class="fa fa-link"></i>
                                </a>
                                <a class="btn btn-sm btn-secondary m-1" href="img/img-peulh/portfolio-2.jpg" data-lightbox="portfolio">
                                    <i class="fa fa-eye"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 p-0 portfolio-item">
                    <div class="position-relative overflow-hidden">
                        <div class="portfolio-img h-edit">
                            <img class="img-fluid w-100" src="img/img-peulh/portfolio/foin pour bovin.jpeg" alt="">
                        </div>
                        <div class="portfolio-text bg-primary">
                            <h4 class="font-weight-bold mb-4">Foin</h4>
                            <div class="d-flex align-items-center justify-content-center">
                                <a class="btn btn-sm btn-secondary m-1" href="">
                                    <i class="fa fa-link"></i>
                                </a>
                                <a class="btn btn-sm btn-secondary m-1" href="img/img-peulh/portfolio-3.jpg" data-lightbox="portfolio">
                                    <i class="fa fa-eye"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 p-0 portfolio-item">
                    <div class="position-relative overflow-hidden">
                        <div class="portfolio-img">
                            <img class="img-fluid w-100" src="img/img-peulh/portfolio/fromage rouge pour bovin.png" alt="">
                        </div>
                        <div class="portfolio-text bg-primary">
                            <h4 class="font-weight-bold mb-4">Fromage Rouge</h4>
                            <div class="d-flex align-items-center justify-content-center">
                                <a class="btn btn-sm btn-secondary m-1" href="">
                                    <i class="fa fa-link"></i>
                                </a>
                                <a class="btn btn-sm btn-secondary m-1" href="img/img-peulh/portfolio-4.jpg" data-lightbox="portfolio">
                                    <i class="fa fa-eye"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 p-0 portfolio-item">
                    <div class="position-relative overflow-hidden">
                        <div class="portfolio-img">
                            <img class="img-fluid w-100" src="img/img-peulh/portfolio/meat.png" alt="">
                        </div>
                        <div class="portfolio-text bg-primary">
                            <h4 class="font-weight-bold mb-4">Viande Saillant</h4>
                            <div class="d-flex align-items-center justify-content-center">
                                <a class="btn btn-sm btn-secondary m-1" href="">
                                    <i class="fa fa-link"></i>
                                </a>
                                <a class="btn btn-sm btn-secondary m-1" href="img/img-peulh/portfolio-5.jpg" data-lightbox="portfolio">
                                    <i class="fa fa-eye"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 p-0 portfolio-item">
                    <div class="position-relative overflow-hidden">
                        <div class="portfolio-img">
                            <img class="img-fluid w-100" src="img/img-peulh/portfolio/site de pâturage.jpeg" alt="">
                        </div>
                        <div class="portfolio-text bg-primary">
                            <h4 class="font-weight-bold mb-4">Pâturage</h4>
                            <div class="d-flex align-items-center justify-content-center">
                                <a class="btn btn-sm btn-secondary m-1" href="">
                                    <i class="fa fa-link"></i>
                                </a>
                                <a class="btn btn-sm btn-secondary m-1" href="img/img-peulh/portfolio-6.jpg" data-lightbox="portfolio">
                                    <i class="fa fa-eye"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
    <!-- Portfolio End -->

    <!-- Contact Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row align-items-end mb-4">
                <div class="col-lg-6">
                    <h6 class="text-secondary font-weight-semi-bold text-uppercase mb-3">Contactez-Nous</h6>
                    <h1 class="section-title mb-3">Contactez-Nous pour tout besoin</h1>
                </div>
                <div class="col-lg-6">
                    <!-- <h4 class="font-weight-normal text-muted mb-3">Eirmod kasd duo eos et magna, diam dolore stet sea clita sit ea erat lorem. Ipsum eos ipsum magna lorem stet</h4> -->
                </div>
            </div>
            <div class="row">
                <div class="col-lg-7 mb-5 mb-lg-0">
                    <div class="contact-form">
                        <div id="success"></div>
                        <form name="sentMessage" id="contactForm" novalidate="novalidate">
                            <div class="form-row">
                                <div class="col-sm-6 control-group">
                                    <input type="text" class="form-control p-4" id="name" placeholder="Votre Nom" required="required" data-validation-required-message="Entrer votre nom svp" />
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="col-sm-6 control-group">
                                    <input type="email" class="form-control p-4" id="email" placeholder="Votre Email" required="required" data-validation-required-message="Entrer votre email svp" />
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="control-group">
                                <input type="text" class="form-control p-4" id="subject" placeholder="Sujet de Contact" required="required" data-validation-required-message="Entrer un sujet de contact svp" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <textarea class="form-control p-4" rows="6" id="message" placeholder="Message" required="required" data-validation-required-message="Entrer votre message svp"></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                            <div>
                                <button class="btn btn-primary btn-block py-3 px-5" type="submit" id="sendMessageButton">Envoyer un Message</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-5" style="min-height: 400px;">
                    <div class="position-relative h-100 rounded overflow-hidden">
                        <iframe style="width: 100%; height: 100%; object-fit: cover;"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d125977.52701863702!2d2.527193495
                        4203368!3d9.351160549754804!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x10320550a556d695
                        %3A0x706d4b90bc86232d!2sParakou!5e0!3m2!1sfr!2sbj!4v1708417046394!5m2!1sfr!2sbj"
                        frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->


    <!-- Team Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row align-items-end mb-4">
                <div class="col-lg-6">
                    <h6 class="text-secondary font-weight-semi-bold text-uppercase mb-3">Rencontrez notre équipe</h6>
                    <h1 class="section-title mb-3">Rencontrez nos experts de l'élevage</h1>
                </div>
                <div class="col-lg-6">
                    <h4 class="font-weight-normal text-muted mb-3">Notre équipe est composée de passionnés de l'élevage bovin et de professionnels de la technologie prêt à faciliter la vie des éleveurs.</h4>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="owl-carousel team-carousel position-relative">
                        <div class="team d-flex flex-column text-center rounded overflow-hidden">
                            <div class="position-relative">
                                <div class="team-img">
                                    <img class="img-fluid w-100" src="img/img-peulh/peulh1.jpg" alt="">
                                </div>
                                <div class="team-social d-flex flex-column align-items-center justify-content-center bg-primary">
                                    <a class="btn btn-secondary btn-social mb-2" href="#"><i class="fab fa-whatsapp"></i></a>
                                </div>
                            </div>
                            <div class="d-flex flex-column bg-primary text-center py-4">
                                <h5 class="font-weight-bold">Jean AGOSSOU</h5>
                                <p class="text-white m-0">Eleveur</p>
                            </div>
                        </div>
                        <div class="team d-flex flex-column text-center rounded overflow-hidden">
                            <div class="position-relative">
                                <div class="team-img">
                                    <img class="img-fluid w-100" src="img/img-peulh/peulh1.jpg" alt="">
                                </div>
                                <div class="team-social d-flex flex-column align-items-center justify-content-center bg-primary">
                                    <a class="btn btn-secondary btn-social mb-2" href="#"><i class="fab fa-whatsapp"></i></a>
                                </div>
                            </div>
                            <div class="d-flex flex-column bg-primary text-center py-4">
                                <h5 class="font-weight-bold">Jean AGOSSOU</h5>
                                <p class="text-white m-0">Eleveur</p>
                            </div>
                        </div>
                        <div class="team d-flex flex-column text-center rounded overflow-hidden">
                            <div class="position-relative">
                                <div class="team-img">
                                    <img class="img-fluid w-100" src="img/img-peulh/peulh1.jpg" alt="">
                                </div>
                                <div class="team-social d-flex flex-column align-items-center justify-content-center bg-primary">
                                    <a class="btn btn-secondary btn-social mb-2" href="#"><i class="fab fa-whatsapp"></i></a>
                                </div>
                            </div>
                            <div class="d-flex flex-column bg-primary text-center py-4">
                                <h5 class="font-weight-bold">Jean AGOSSOU</h5>
                                <p class="text-white m-0">Eleveur</p>
                            </div>
                        </div>
                        <div class="team d-flex flex-column text-center rounded overflow-hidden">
                            <div class="position-relative">
                                <div class="team-img">
                                    <img class="img-fluid w-100" src="img/img-peulh/peulh1.jpg" alt="">
                                </div>
                                <div class="team-social d-flex flex-column align-items-center justify-content-center bg-primary">
                                    <a class="btn btn-secondary btn-social mb-2" href="#"><i class="fab fa-whatsapp"></i></a>
                                </div>
                            </div>
                            <div class="d-flex flex-column bg-primary text-center py-4">
                                <h5 class="font-weight-bold">Jean AGOSSOU</h5>
                                <p class="text-white m-0">Eleveur</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->


    <!-- Testimonial Start -->
    <div class="container-fluid bg-testimonial py-5">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-7 pt-lg-5 pb-5">
                    <h6 class="text-secondary font-weight-semi-bold text-uppercase mb-3">Témoignages</h6>
                    <h1 class="section-title text-white mb-5">Ce que nos clients disent !</h1>
                    <div class="owl-carousel testimonial-carousel position-relative">
                        <div class="d-flex flex-column text-white">
                            <div class="d-flex align-items-center mb-3">
                                <img class="img-fluid" src="img/img-peulh/Man_Silhouette.png" alt="">
                                <div class="ml-3">
                                    <h5 class="text-primary">Jean</h5>
                                    <i>Eleveur bovin</i>
                                </div>
                            </div>
                            <p>Grâce à cette plateforme, j'ai pu constituer mon propre troupeau bovin sans avoir à investir dans une ferme. C'est une solution vraiment pratique et flexible !</p>
                        </div>
                        <div class="d-flex flex-column text-white">
                            <div class="d-flex align-items-center mb-3">
                                <img class="img-fluid" src="img/img-peulh/Man_Silhouette.png" alt="">
                                <div class="ml-3">
                                    <h5 class="text-primary">Marie</h5>
                                    <i>Eleveuse laitière</i>
                                </div>
                            </div>
                            <p>Je suis ravi de travailler avec les animaliers peulhs certifiés de cette plateforme. Ils sont très compétents et m'ont permis d'optimiser la gestion de mon cheptel en un temps record.</p>
                        </div>
                        <div class="d-flex flex-column text-white">
                            <div class="d-flex align-items-center mb-3">
                                <img class="img-fluid" src="img/img-peulh/Man_Silhouette.png" alt="">
                                <div class="ml-3">
                                    <h5 class="text-primary">Abdoul</h5>
                                    <i>Eleveur traditionnel</i>
                                </div>
                            </div>
                            <p>Avant, je perdais beaucoup de temps à chercher et à vérifier la fiabilité des animaliers. Avec cette solution, tout est simplifié. Je peux me concentrer sur le développement de mon activité en toute sérénité.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5" style="min-height: 400px;">
                    <div class="position-relative h-100 rounded overflow-hidden">
                        <img class="position-absolute w-100 h-100" src="img/img-peulh/testimonial.jpg" style="object-fit: cover;">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->


    <!-- Blog Start -->
    <div class="container-fluid pt-5">
        <div class="container pt-5">
            <div class="row align-items-end mb-4">
                <div class="col-lg-6">
                    <h6 class="text-secondary font-weight-semi-bold text-uppercase mb-3">Nos récents blog</h6>
                    <h1 class="section-title mb-3">Les récents articles de notre blog</h1>
                </div>
                <div class="col-lg-6">
                    <!-- <h4 class="font-weight-normal text-muted mb-3">Eirmod kasd duo eos et magna, diam dolore stet sea clita sit ea erat lorem. Ipsum eos ipsum magna lorem stet</h4> -->
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-5">
                    <div class="position-relative mb-4">
                        <img class="img-fluid rounded w-100" src="img/img-peulh/portfolio-1.jpg" alt="">
                        <div class="blog-date">
                            <h4 class="font-weight-bold mb-n1">01</h4>
                            <small class="text-white text-uppercase">Jan</small>
                        </div>
                    </div>
                    <h5 class="font-weight-medium mb-2">Adopter une Approche Intelligente et Connectée</h5>
                    <p class="mb-4">Fini les méthodes traditionnelles chronophages ! Avec les outils de gestion d'élevage connectés, suivez en temps réel les indicateurs clés de votre activité.</p>
                    <a class="btn btn-sm btn-primary py-2" href="blog.php">En savoir plus</a>
                </div>
                <div class="col-lg-4 col-md-6 mb-5">
                    <div class="position-relative mb-4">
                        <img class="img-fluid rounded w-100" src="img/img-peulh/portfolio-2.jpg" alt="">
                        <div class="blog-date">
                            <h4 class="font-weight-bold mb-n1">22</h4>
                            <small class="text-white text-uppercase">Oct</small>
                        </div>
                    </div>
                    <h5 class="font-weight-medium mb-2">Repenser la Gestion de votre Élevage Bovin pour une Productivité Optimale</h5>
                    <p class="mb-4">La gestion d'un élevage bovin peut s'avérer complexe, surtout pour les nouveaux venus dans le domaine.</p>
                    <a class="btn btn-sm btn-primary py-2" href="blog.php">En savoir plus</a>
                </div>
                <div class="col-lg-4 col-md-6 mb-5">
                    <div class="position-relative mb-4">
                        <img class="img-fluid rounded w-100" src="img/img-peulh/portfolio-3.jpg" alt="">
                        <div class="blog-date">
                            <h4 class="font-weight-bold mb-n1">12</h4>
                            <small class="text-white text-uppercase">Jul</small>
                        </div>
                    </div>
                    <h5 class="font-weight-medium mb-2">Déléguer pour vous Concentrer sur l'Essentiel</h5>
                    <p class="mb-4">Grâce à cette approche intelligente et à l'expertise de spécialistes, vous n'aurez plus à vous disperser dans les tâches quotidiennes chronophages.</p>
                    <a class="btn btn-sm btn-primary py-2" href="blog.php" id="plus">En savoir plus</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog End -->


    <!-- Footer Start -->
    <?php require "footer.php"; ?>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-primary px-3 back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/isotope/isotope.pkgd.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>

    <script>
        function showPopUp(){
            document.getElementById('hidepopup').style.display = "flex";
        }
        function showPopUpMb(){
            document.getElementById('hidepopupmb').style.display = "flex";
        }
        function redirectToUrl(){
            window.location.href="connexion.php";
        }
        function redirectToUrlIndex(){
            window.location.href="index.php#service";
        }
    </script>
</body>

</html>