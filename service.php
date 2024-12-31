<?php 
    session_start();
    $element_active = "solution";
?>
<!DOCTYPE html>
<html lang="fr">

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
</style>
<body>
    <!-- Header Start -->
    <?php require "header.php"; ?>
    <!-- Header End -->


    <!-- Page Header Start -->
    <div class="container-fluid bg-primary py-5 mb-5">
        <div class="container py-5">
            <div class="row align-items-center py-4">
                <div class="col-md-6 text-center text-md-left">
                    <h1 class="display-4 mb-4 mb-md-0 text-secondary text-uppercase">Solution</h1>
                </div>
                <div class="col-md-6 text-center text-md-right">
                    <div class="d-inline-flex align-items-center">
                        <a class="btn btn-sm btn-outline-light" href="index.php">Accueil</a>
                        <i class="fas fa-angle-double-right text-light mx-2"></i>
                        <a class="btn btn-sm btn-outline-light disabled" href="">Solution</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Services Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h6 class="text-secondary font-weight-semi-bold text-uppercase mb-3">Nos Solutions</h6>
                    <h1 class="mb-4 section-title">Nos Solutions</h1>
                    <p>Accédez à un répertoire complet des principaux marchés de bétail de la région. Consultez les horaires, les tarifs et les animaux disponibles.</p>
                </div>
                <div class="col-lg-6 pt-5 pt-lg-0">
                    <div class="owl-carousel service-carousel position-relative">
                        <div class="d-flex flex-column align-items-center text-center bg-light rounded overflow-hidden pt-4">
                            <a href="solution-bovinsolution/info-animalier.php">
                                <div class="icon-box bg-light text-secondary shadow mt-2 mb-4">
                                    <i class="fa fa-2x fa-search"></i>
                                </div>
                            </a>
                            <h5 class="font-weight-bold mb-4 px-4">Animalier</h5>
                            <img src="img/img-peulh/portfolio-1.jpg" alt="">
                        </div>
                        <div class="d-flex flex-column align-items-center text-center bg-light rounded overflow-hidden pt-4">
                            <a href="solution-bovinsolution/info-animalier.php">
                                <div class="icon-box bg-light text-secondary shadow mt-2 mb-4">
                                    <i class="fa fa-2x fa-store"></i>
                                </div>
                            </a>
                            <h5 class="font-weight-bold mb-4 px-4">Marché de bétails</h5>
                            <img src="img/img-peulh/portfolio-2.jpg" alt="">
                        </div>
                        <div class="d-flex flex-column align-items-center text-center bg-light rounded overflow-hidden pt-4">
                            <a href="solution-bovinsolution/info-animalier.php">
                                <div class="icon-box bg-light text-secondary shadow mt-2 mb-4">
                                    <i class="fa fa-2x fa-map-marker-alt"></i>
                                </div>
                            </a>
                            <h5 class="font-weight-bold mb-4 px-4">Géolocalisation</h5>
                            <img src="img/img-peulh/portfolio-3.jpg" alt="">
                        </div>
                        <div class="d-flex flex-column align-items-center text-center bg-light rounded overflow-hidden pt-4">
                            <a href="solution-bovinsolution/info-animalier.php">
                                <div class="icon-box bg-light text-secondary shadow mt-2 mb-4">
                                    <i class="fa fa-2x fa-money-bill-alt"></i>
                                </div>
                            </a>
                            <h5 class="font-weight-bold mb-4 px-4">Achat des produits</h5>
                            <img src="img/img-peulh/portfolio-4.jpg" alt="">
                        </div>
                        <div class="d-flex flex-column align-items-center text-center bg-light rounded overflow-hidden pt-4">
                            <a href="solution-bovinsolution/info-animalier.php">
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


    <!-- Testimonial Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 pt-lg-5 pb-5">
                    <h6 class="text-secondary font-weight-semi-bold text-uppercase mb-3">Témoignages</h6>
                    <h1 class="section-title mb-5">Ce que nos clients disent !</h1>
                    <div class="owl-carousel testimonial-carousel position-relative">
                        <div class="d-flex flex-column">
                            <div class="d-flex align-items-center mb-3">
                                <img class="img-fluid" src="img/img-peulh/Man_Silhouette.png" alt="">
                                <div class="ml-3">
                                    <h5>Jean</h5>
                                    <i>Eleveur Bovin</i>
                                </div>
                            </div>
                            <p>Grâce à cette plateforme, j'ai pu constituer mon propre troupeau bovin sans avoir à investir dans une ferme. C'est une solution vraiment pratique et flexible !</p>
                        </div>
                        <div class="d-flex flex-column">
                            <div class="d-flex align-items-center mb-3">
                                <img class="img-fluid" src="img/img-peulh/Man_Silhouette.png" alt="">
                                <div class="ml-3">
                                    <h5>Marie</h5>
                                    <i>Eleveuse laitière</i>
                                </div>
                            </div>
                            <p>Je suis ravi de travailler avec les animaliers peulhs certifiés de cette plateforme. Ils sont très compétents et m'ont permis d'optimiser la gestion de mon cheptel en un temps record.</p>
                        </div>
                        <div class="d-flex flex-column">
                            <div class="d-flex align-items-center mb-3">
                                <img class="img-fluid" src="img/img-peulh/Man_Silhouette.png" alt="">
                                <div class="ml-3">
                                    <h5>Abdoul</h5>
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
    </script>
</body>

</html>