<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>Inscription BovinSolution | WaxangariLabs</title>
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
        <link rel="stylesheet" href="new/css/bootstrap.min.css">
    </head>
    <style>
        .inside{
            display: flex;
            justify-content: center;
            align-content: center;
            flex-direction: column;
        }
        .text-secondary-new{
            color: #23A036;
        }
        .btn-secondary-new{
            background-color: #23A036;
            color: white;
        }
        .btn-secondary-new:hover{
            background-color: #23A036;
            color: white;
        }
        .margin-5{
            margin-top: 60px;
        }
    </style>
    <body>

    <!-- ***** Product Area Starts ***** -->
    <div class="container">
        <div class="row">
            <div class="col-5 margin-5">
                <div class="my-5">
                    <h1 class="text-secondary-new">BovinSolution</h1>
                    <p class="h5">L'application qui vous permet de démarrer facilement votre activité d'élevage de bovins. </p>
                </div>
            </div>
            <div class="col-6 shadow bg-light py-3 px-4 inside margin-5 ms-5">
                <h4 class="text-center mb-3">Inscrivez-vous !</h4>
                <form action="traitementInscription.php" class="form" method="post">
                    <div class="row mb-3">
                        <div class="col">
                            <label for="nom" class="form-label h5">Nom: </label>
                            <input type="text" class="form-control" id="nom" value="<?php if(isset($_SESSION['nom'])): ?><?php echo $_SESSION['nom']; unset($_SESSION['nom']); ?><?php endif ?>" name="nom" placeholder="Nom..." required>
                        </div>
                        <div class="col">
                            <label for="prenom" class="form-label h5">Prénom: </label>
                            <input type="text" class="form-control" id="prenoms" value="<?php if(isset($_SESSION['prenoms'])): ?><?php echo $_SESSION['prenoms']; unset($_SESSION['prenoms']); ?><?php endif ?>" name="prenoms" placeholder="Prénom..." required>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="categories" class="form-label h5">Catégories: </label>
                        <select name="categories" id="categories" class="form-control">
                            <option <?php if(isset($_SESSION['categories']) && $_SESSION['categories'] == "Eleveurs"){ ?> selected="selected"<?php unset($_SESSION['categories']); } ?> value="Eleveurs">Fermiers</option>
                            <option <?php if(isset($_SESSION['categories']) && $_SESSION['categories'] == "Particuliers"){ ?> selected="selected"<?php unset($_SESSION['categories']); } ?> value="Particuliers">Consommateurs</option>
                            <option <?php if(isset($_SESSION['categories']) && $_SESSION['categories'] == "Consommateurs"){ ?> selected="selected"<?php unset($_SESSION['categories']); } ?> value="Consommateurs">Vendeurs</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="mail" class="form-label h5">E-mail: </label>
                        <input type="email" class="form-control" id="mail" name="mail" value="<?php if(isset($_SESSION['mail'])): ?><?php echo $_SESSION['mail']; unset($_SESSION['mail']); ?><?php endif ?>" placeholder="E-mail" required>
                        <?php if(isset($_SESSION['error_mail'])): ?>
                            <p class="text-danger p-0 m-0">
                                <?php echo $_SESSION['error_mail']; unset($_SESSION['error_mail']) ?>
                            </p>
                        <?php endif; ?>
                    </div>
                    <div class="mb-3">
                        <label for="motDePasse" class="form-label h5">Mot de passe: </label>
                        <input type="password" class="form-control" id="motDePasse" name="motDePasse" placeholder="Mot de Passe" required>
                    </div>
                    <div class="">
                        <label for="cmotDePasse" class="form-label h5">Confirmez le mot de passe: </label>
                        <input type="password" class="form-control" id="cmotDePasse" name="cmotDePasse" placeholder="Confirmez le mot de passe" required>
                    </div>
                    <?php if(isset($_SESSION['error_mp'])): ?>
                        <p class="text-danger p-0 m-0">
                            <?php echo $_SESSION['error_mp']; unset($_SESSION['error_mp']) ?>
                        </p>
                    <?php endif; ?>
                    <div class='mt-4'>
                        <input type="submit" class="form-control btn-secondary-new p-3" style="font-weight: bold;" value="Connexion">
                    </div>
                    <div class="mt-3">
                        <span>Vous avez déjà un compte avec nous ?</span>
                        <span class="mx-3"><a href="connexion.php">Se connecter</a></span>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- ***** Product Area Ends ***** -->
    

    <!-- jQuery -->
    <script src="assets/js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/accordions.js"></script>
    <script src="assets/js/datepicker.js"></script>
    <script src="assets/js/scrollreveal.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/imgfix.min.js"></script> 
    <script src="assets/js/slick.js"></script> 
    <script src="assets/js/lightbox.js"></script> 
    <script src="assets/js/isotope.js"></script> 
    <script src="assets/js/quantity.js"></script>
    
    <!-- Global Init -->
    <script src="assets/js/custom.js"></script>

    <script>

        $(function() {
            var selectedClass = "";
            $("p").click(function(){
            selectedClass = $(this).attr("data-rel");
            $("#portfolio").fadeTo(50, 0.1);
                $("#portfolio div").not("."+selectedClass).fadeOut();
            setTimeout(function() {
              $("."+selectedClass).fadeIn();
              $("#portfolio").fadeTo(50, 1);
            }, 500);
                
            });
        });

    </script>

  </body>

</html>
