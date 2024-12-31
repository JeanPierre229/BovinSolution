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
    <div class="container-fluid px-3">
      <!-- Pop-up avec flou en arrière-plan -->
      <div class="pop-up-overlay">
        <div class="pop-up-content">
          <div class="card">
            <div class="card-header text-start">
              <h5 class="card-title mb-0 text-center mb-2">Modifier ce bovin</h5>
              <form action="#" method="post">
                <div class="mb-3">
                  <label for="nom" class="form-label">Categorie du Bovin:</label>
                  <select class="form-select" id="nom" name="nom" required>
                    <option value="vaux">Vaux</option>
                    <option value="taureau" selected>Taureau</option>
                    <option value="vache">Vache</option>
                  </select>
                </div>
                <div class="mb-3">
                  <label for="imageBovin" class="form-label">Image du bovin:</label>
                  <input type="file" class="form-control" id="imageBovin" name="imageBovin" required>
                </div>
                <div class="mb-3">
                  <label for="sexe" class="form-label">Sexe:</label>
                  <select class="form-select" id="sexe" name="sexe" required>
                    <option value="male">Mâle</option>
                    <option value="femele" selected>Femele</option>
                  </select>
                </div>
                <div class="mb-3">
                    <label for="descriptionBovin" class="form-label">Prix du bovin: </label>
                    <input type="number" class="form-control" min="100000" value="1200000" step="100000" id="price" placeholder="Prix du bovin" required>
                </div>
                <div class="">
                    <div class="row">
                        <div class="col mt-3">
                            <button class="btn bg-gradient-success">Modifier</button>
                        </div>
                        <div class="col mt-3 text-end">
                            <a href="services.php" class="btn btn-gradient-warning">Annuler</a>
                        </div>
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
