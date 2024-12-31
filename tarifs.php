<?php 
    session_start();
    $element_active = "tarifs";
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
    <!-- Materials icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<style>
    .cadrant-green{
        border: 10px solid #00A65A;
    }

    .hideTparticuliers, .hideTconsommateurs{
        display: none;
    }
    .cursor{
        cursor: pointer;
    }
    .rounded-4{
        border-radius: 20px;
    }
    .bg-gray{
        background-color: #e6e6e6;
    }
    .bg-green{
        background-color: #00A65A;
    }
    .rounded-start{
        border-top-left-radius: 20px;
        border-bottom-left-radius: 20px;
    }
    .rounded-end{
        border-top-right-radius: 20px;
        border-bottom-right-radius: 20px;
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
                    <h1 class="display-4 mb-4 mb-md-0 text-secondary text-uppercase">Tarifs</h1>
                </div>
                <div class="col-md-6 text-center text-md-right">
                    <div class="d-inline-flex align-items-center">
                        <a class="btn btn-sm btn-outline-light" href="index.php">Accueil</a>
                        <i class="fas fa-angle-double-right text-light mx-2"></i>
                        <a class="btn btn-sm btn-outline-light disabled" href="">Tarifs</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Tarifs Start -->
    <div class="row mx-5">
        <div class="col mx-auto text-center bg-green border-bottom-orange cursor rounded-start p-3" id="televeurs" onclick="showSection_t('Televeurs')"> 
            Fermiers
        </div>
        <div class="col mx-auto text-center bg-gray border-bottom-orange cursor p-3"  id="tparticuliers"  onclick="showSection_t('Tparticuliers')">
            Consommateurs
        </div>
        <div class="col mx-auto text-center bg-gray border-bottom-orange cursor p-3 rounded-end" id="tconsommateurs" onclick="showSection_t('Tconsommateurs')"> 
            Vendeurs
        </div>
    </div>
    <section class="my-4 hideTeleveurs mx-5">
        <div class="row d-flex justify-content-between mx-5">
            <div class="col-lg-5 cadrant-green rounded-4 shadow p-3">
                <h3 class="text-center">Offre Basique </h3>
                <p class="text-center">
                    Accédez à des outils essentiels pour gérer efficacement votre troupeau. Profitez de fonctionnalités adaptées à vos besoins, tout en maîtrisant vos coûts.
                </p>
                <h4 class="text-center text-green my-4" id="prixTotalStd">50.000 XOF / an</h4>
                <p class="my-3">
                    <button class="btn btn-outline-secondary py-3 col-12">COMMENCER</button>
                </p>
                <h5 class="my-3">FONCTIONS DISPONIBLES</h5>
                <p class="d-flex">
                    <i class="material-icons text-secondary">check_circle</i>
                    Accès à notre base de données d'animaliers
                </p>
                <p class="d-flex">
                    <i class="material-icons text-secondary">check_circle</i>
                    Outils de gestion du troupeau
                </p>
                <p class="d-flex">
                    <i class="material-icons text-secondary">check_circle</i>
                    Plateforme de mise en relation avec les acheteurs
                </p>
                <p class="d-flex">
                    <i class="material-icons text-danger">cancel</i>
                    Assistance personnalisée d'un conseiller dédié
                </p>
                <p class="d-flex">
                    <i class="material-icons text-danger">cancel</i>
                    Formations et ateliers sur les pratiques d'élevage
                </p>
                <p class="d-flex">
                    <i class="material-icons text-danger">cancel</i>
                    Priorité dans les mises en relation avec les acheteurs
                </p>
            </div>
            <div class="col-lg-5 cadrant-green rounded-4 ml-4 p-3 shadow">
                <h3 class="text-center">Offre Premium</h3>
                <p class="text-center">
                    Bénéficiez d'une gestion avancée de votre exploitation avec des outils premium et un accompagnement personnalisé pour maximiser votre rendement.
                </p>
                <h4 class="text-center text-green my-4" id="prixTotalA">100.000 XOF / an</h4>
                <p class="my-3">
                    <button class="btn btn-outline-secondary py-3 col-12">COMMENCER</button>
                </p>
                <h5 class="my-3">FONCTIONS DISPONIBLES</h5>
                <p class="d-flex">
                    <i class="material-icons text-secondary">check_circle</i>
                    Accès à notre base de données d'animaliers
                </p>
                <p class="d-flex">
                    <i class="material-icons text-secondary">check_circle</i>
                    Outils de gestion du troupeau
                </p>
                <p class="d-flex">
                    <i class="material-icons text-secondary">check_circle</i>
                    Plateforme de mise en relation avec les acheteurs
                </p>
                <p class="d-flex">
                    <i class="material-icons text-secondary">check_circle</i>
                    Assistance personnalisée d'un conseiller dédié
                </p>
                <p class="d-flex">
                    <i class="material-icons text-secondary">check_circle</i>
                    Formations et ateliers sur les pratiques d'élevage
                </p>
                <p class="d-flex">
                    <i class="material-icons text-secondary">check_circle</i>
                    Priorité dans les mises en relation avec les acheteurs
                </p>
            </div>
        </div>
    </section>
    <section class="my-4 hideTparticuliers mx-5">
        <div class="row d-flex justify-content-between mx-5">
            <div class="col-lg-5 cadrant-green rounded-4 shadow p-3">
                <h3 class="text-center">Offre Basique </h3>
                <p class="text-center">
                    Découvrez l'essentiel pour accéder à des éleveurs certifiés et commander vos produits d'élevage en toute simplicité, à un prix abordable.
                </p>
                <h4 class="text-center text-green my-4" id="prixTotalStd">20.000 XOF / an</h4>
                <p class="my-3">
                    <button class="btn btn-outline-secondary py-3 col-12">COMMENCER</button>
                </p>
                <h5 class="my-3">FONCTIONS DISPONIBLES</h5>
                <p class="d-flex">
                    <i class="material-icons text-secondary">check_circle</i>
                    Accès à notre catalogue d'éleveurs certifiés
                </p>
                <p class="d-flex">
                    <i class="material-icons text-secondary">check_circle</i>
                    Commande et livraison de produits d'élevage
                </p>
                <p class="d-flex">
                    <i class="material-icons text-danger">cancel</i>
                    Outils de suivi de votre activité d'élevage
                </p>
                <p class="d-flex">
                    <i class="material-icons text-danger">cancel</i>
                    Conseils personnalisés d'un expert en élevage
                </p>
                <p class="d-flex">
                    <i class="material-icons text-danger">cancel</i>
                    Priorité dans l'accès aux produits les plus demandés
                </p>
            </div>
            <div class="col-lg-5 cadrant-green rounded-4 ml-4 p-3 shadow">
                <h3 class="text-center">Offre Premium</h3>
                <p class="text-center">
                    Accédez à des services avancés avec une gestion complète de vos commandes et un suivi optimal de votre activité d'élevage, pour un accompagnement sur mesure.
                </p>
                <h4 class="text-center text-green my-4" id="prixTotalA">40.000 XOF / an</h4>
                <p class="my-3">
                    <button class="btn btn-outline-secondary py-3 col-12">COMMENCER</button>
                </p>
                <h5 class="my-3">FONCTIONS DISPONIBLES</h5>
                <p class="d-flex">
                    <i class="material-icons text-secondary">check_circle</i>
                    Accès à notre catalogue d'éleveurs certifiés
                </p>
                <p class="d-flex">
                    <i class="material-icons text-secondary">check_circle</i>
                    Commande et livraison de produits d'élevage
                </p>
                <p class="d-flex">
                    <i class="material-icons text-secondary">check_circle</i>
                    Outils de suivi de votre activité d'élevage
                </p>
                <p class="d-flex">
                    <i class="material-icons text-secondary">check_circle</i>
                    Conseils personnalisés d'un expert en élevage
                </p>
                <p class="d-flex">
                    <i class="material-icons text-secondary">check_circle</i>
                    Priorité dans l'accès aux produits les plus demandés
                </p>
            </div>
        </div>
    </section>
    <section class="my-4 hideTconsommateurs mx-5">
        <div class="row d-flex justify-content-between mx-5">
            <div class="col-lg-5 cadrant-green rounded-4 shadow p-3">
                <h3 class="text-center">Offre Basique </h3>
                <p class="text-center">
                    Profitez d'une commande simplifiée auprès de nos éleveurs partenaires, sans livraison à domicile, mais avec des tarifs ultra-compétitifs.
                </p>
                <h4 class="text-center text-green my-4" id="prixTotalStd">50.000 XOF / an</h4>
                <p class="my-3">
                    <button class="btn btn-outline-secondary py-3 col-12">COMMENCER</button>
                </p>
                <h5 class="my-3">FONCTIONS DISPONIBLES</h5>
                <p class="d-flex">
                    <i class="material-icons text-secondary">check_circle</i>
                    Commande ponctuelle
                </p>
                <p class="d-flex">
                    <i class="material-icons text-secondary">check_circle</i>
                    Achat direct auprès des éleveurs de notre communauté
                </p>
                <p class="d-flex">
                    <i class="material-icons text-danger">cancel</i>
                    Livraison à domicile ou en point relais
                </p>
                <p class="d-flex">
                    <i class="material-icons text-danger">cancel</i>
                    Tarifs compétitifs et transparents
                </p>
            </div>
            <div class="col-lg-5 cadrant-green rounded-4 ml-4 p-3 shadow">
                <h3 class="text-center">Offre Premium</h3>
                <p class="text-center">
                    Accédez à une expérience complète avec livraison à domicile, des tarifs transparents, et un service de commande rapide et fiable.
                </p>
                <h4 class="text-center text-green my-4" id="prixTotalA">100.000 XOF / an</h4>
                <p class="my-3">
                    <button class="btn btn-outline-secondary py-3 col-12">COMMENCER</button>
                </p>
                <h5 class="my-3">FONCTIONS DISPONIBLES</h5>
                <p class="d-flex">
                    <i class="material-icons text-secondary">check_circle</i>
                    Commande ponctuelle
                </p>
                <p class="d-flex">
                    <i class="material-icons text-secondary">check_circle</i>
                    Achat direct auprès des éleveurs de notre communauté
                </p>
                <p class="d-flex">
                    <i class="material-icons text-secondary">check_circle</i>
                    Livraison à domicile ou en point relais
                </p>
                <p class="d-flex">
                    <i class="material-icons text-secondary">check_circle</i>
                    Tarifs compétitifs et transparents
                </p>
            </div>
        </div>
    </section>
    <!-- Tarifs End -->

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

    <!-- Navigation dans les options -->
    <script>
        const sections1 = document.querySelectorAll('.hideTeleveurs, .hideTparticuliers, .hideTconsommateurs');
        const selectTeleveurs = document.getElementById('televeurs');
        const selectTparticuliers = document.getElementById('tparticuliers');
        const selectTconsommateurs = document.getElementById('tconsommateurs');
    
        function showSection_t(section) {
            sections1.forEach(sec => sec.style.display = 'none');
            document.querySelector('.hide' + section).style.display = 'block';
        }
        selectTeleveurs.style.color = "white";
        // Partie sélection
        selectTeleveurs.addEventListener('click', function(){
            selectTeleveurs.style.backgroundColor = "#00A65A";
            selectTparticuliers.style.backgroundColor = "#D9D9D9";
            selectTconsommateurs.style.backgroundColor = "#D9D9D9";
            selectTeleveurs.style.color = "white";
            selectTparticuliers.style.color = "black";
            selectTconsommateurs.style.color = "black";
        });
        selectTparticuliers.addEventListener('click', function(){
            selectTparticuliers.style.backgroundColor = "#00A65A";
            selectTeleveurs.style.backgroundColor = "#D9D9D9";
            selectTconsommateurs.style.backgroundColor = "#D9D9D9";
            selectTparticuliers.style.color = "white";
            selectTconsommateurs.style.color = "black";
            selectTeleveurs.style.color = "black";
        });
        selectTconsommateurs.addEventListener('click', function(){
            selectTconsommateurs.style.backgroundColor = "#00A65A";
            selectTparticuliers.style.backgroundColor = "#D9D9D9";
            selectTeleveurs.style.backgroundColor = "#D9D9D9";
            selectTconsommateurs.style.color = "white";
            selectTeleveurs.style.color = "black";
            selectTparticuliers.style.color = "black";
        });
    </script>
</body>

</html>