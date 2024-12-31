<?php 
    session_start();
    $element_active = "blog";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Blog BovinSolution | WaxangariLabs</title>
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
                    <h1 class="display-4 mb-4 mb-md-0 text-secondary text-uppercase">Blog</h1>
                </div>
                <div class="col-md-6 text-center text-md-right">
                    <div class="d-inline-flex align-items-center">
                        <a class="btn btn-sm btn-outline-light" href="">Accueil</a>
                        <i class="fas fa-angle-double-right text-light mx-2"></i>
                        <a class="btn btn-sm btn-outline-light disabled" href="">Blog</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Blog Start -->
    <div class="container-fluid py-5">
        <div class="container">
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
                    <a class="btn btn-sm btn-primary py-2" href="">En savoir plus</a>
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
                    <a class="btn btn-sm btn-primary py-2" href="">En savoir plus</a>
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
                    <a class="btn btn-sm btn-primary py-2" href="">En savoir plus</a>
                </div>
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
                    <a class="btn btn-sm btn-primary py-2" href="">En savoir plus</a>
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
                    <a class="btn btn-sm btn-primary py-2" href="">En savoir plus</a>
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
                    <a class="btn btn-sm btn-primary py-2" href="">En savoir plus</a>
                </div>
                <div class="col-12">
                    <nav aria-label="Page navigation">
                      <ul class="pagination pagination-lg justify-content-center mb-0">
                        <li class="page-item disabled">
                          <a class="page-link" href="#" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                            <span class="sr-only">Previous</span>
                          </a>
                        </li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                          <a class="page-link" href="#" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                            <span class="sr-only">Next</span>
                          </a>
                        </li>
                      </ul>
                    </nav>
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
</body>

</html>