<?php 
    session_start();
    $element_active = "about";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>BovinSolution | WaxangariLabs</title>
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
</head>

<body>
    <!-- Header Start -->
    <?php require "header.php"; ?>
    <!-- Header End -->


    <!-- Page Header Start -->
    <div class="container-fluid bg-primary py-5 mb-5">
        <div class="container py-5">
            <div class="row align-items-center py-4">
                <div class="col-md-6 text-center text-md-left">
                    <h1 class="display-4 mb-4 mb-md-0 text-secondary text-uppercase">A propos</h1>
                </div>
                <div class="col-md-6 text-center text-md-right">
                    <div class="d-inline-flex align-items-center">
                        <a class="btn btn-sm btn-outline-light" href="index.php">Accueil</a>
                        <i class="fas fa-angle-double-right text-light mx-2"></i>
                        <a class="btn btn-sm btn-outline-light disabled" href="">A Propos</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


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
                        <h5 class="font-weight-normal text-white m-0 ml-4 d-none d-sm-block">Play Video</h5>
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


    <!-- Team Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row align-items-end mb-4">
                <div class="col-lg-6">
                    <h6 class="text-secondary font-weight-semi-bold text-uppercase mb-3">Rencontrez notre équipe</h6>
                    <h1 class="section-title mb-3">Rencontrez nos experts de l'élevage</h1>
                </div>
                <div class="col-lg-6">
                    <h4 class="font-weight-normal text-muted mb-3">Notre équipe est composée de passionnés d'élevage bovin et de professionnels de la technologie prêt à faciliter la vie des éleveurs.</h4>
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
</body>

</html>