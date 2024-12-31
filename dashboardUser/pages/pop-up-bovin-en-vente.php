<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="icon" type="image/png" href="../../img/img-peulh/bovinsolution.png">
  <title>BovinSolution - Créer un compte</title>
  <!-- Fonts et icônes -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link id="pagestyle" href="../assets/css/soft-ui-dashboard.css?v=1.0.7" rel="stylesheet" />
  <!-- Icônes Material -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>

<style>
  .text-orange {
    color: #ffc107;
  }

  .text-green {
    color: #28a745;
  }

  .bg-gradient-primary {
    background-image: linear-gradient(310deg, #ffc107 0%, #28a745 100%);
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
    width: 500px;
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
</style>

<body class="g-sidenav-show bg-gray-100">

  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg">
    <div class="container-fluid">
      <!-- Pop-up avec flou en arrière-plan -->
      <div class="pop-up-overlay">
        <div class="pop-up-content">
          <div class="card">
            <div class="card-header text-start">
              <h5 class="card-title mb-0 text-center mb-2">Mettre Ce Bovin en Vente💰💲</h5>
              <form action="#" method="post">
                <p class="text-center">
                    <img src="../../img/img-peulh/Animaux Enregistres/animaux-03.jpeg" class="rounded-3 mt-3" style="width: 400px; height: 200px;" alt="image_animaux">
                </p>
                <div class="text-center">
                    <span class="font-weight-bolder"> Vaux </span>
                </div>
                <p>
                    Un vaux de 2ans qui est bien nouris et bien dodu.
                </p>
                <div class="row justify-content-center">
                  <div class="col-5">
                    <input type="number" class="form-control" min="100000" step="100000" id="price" placeholder="Prix du bovin" required>
                  </div>
                  <div class="col text-center">
                    <button class="btn bg-gradient-success">Vendre</button>
                  </div>
                  <div class="col">
                    <a href="services.php" class="btn btn-outline-dark">Annuler</a>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>

  <!-- Fichiers JS -->
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <script src="../assets/js/soft-ui-dashboard.min.js?v=1.0.7"></script>
</body>

</html>
