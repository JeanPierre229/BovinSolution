<?php 
  session_start();
  $element_active = 'services'; 
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../../img/img-peulh/bovinsolution.png">
  <title>
      Services BovinSolution -- WaxangariLabs
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link id="pagestyle" href="../assets/css/soft-ui-dashboard.css?v=1.0.7" rel="stylesheet" />
  <!-- Materials icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!-- Nepcha Analytics (nepcha.com) -->
  <!-- Nepcha is a easy-to-use web analytics. No cookies and fully compliant with GDPR, CCPA and PECR. -->
  <script defer data-site="YOUR_DOMAIN_HERE" src="https://api.nepcha.com/js/nepcha-analytics.js"></script>
</head>

<style>
  .text-orange{
    color: #ffc107;
  }
  .text-green{
    color: #28a745;
  }
  .navbar-vertical .navbar-nav>.nav-item .nav-link.active .icon {
    background-image: linear-gradient(310deg, #ffc107 0%, #28a745 100%);
  }
  .bg-gradient-primary{
    background-image: linear-gradient(310deg, #ffc107 0%, #28a745 100%);
  }
  .borderDark{
    border: 1px solid rgb(165, 165, 165);
  }
  .sidenav-footer{
    margin-top: 160px;
  }
  .cadrant-green{
      border: 10px solid #00A65A;
  }

  .hideTrelation, .hideTanimaux, .hideTbetails{
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

<body class="g-sidenav-show  bg-gray-100">
  <?php require "aside.php" ?>
  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg">
    <!-- Navbar -->
    <?php require "navbar.php"; ?>
    <!-- End Navbar -->
    <div class="container-fluid py-4">
      <div class="card borderDark">
        <div class="card-header">
          <div class="row my-1">
            <div class="col">
              <img src="../../img/img-peulh/bovinsolution.png" alt="" style="width: 100px; height: 100px;">
              <span class="text-green font-weight-bolder" style="font-size: 25px;">Bovin<span class="text-orange">Solution</span></span>
            </div>
            <div class="col text-end">
              <p class="font-weight-bolder">
                Découvrez la synthèse des activités<br> menés dans votre ferme:
              </p>
              <a href='synthese.php' class="btn bg-gradient-info">Découvrir la Synthèse</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row my-4 px-2 mx-3">
        <div class="col mx-auto text-center bg-gradient-primary cursor rounded-start py-1 ps-5 d-flex" id="tanimalier" onclick="showSection_t('Tanimalier')">
            <i class="material-icons text-center pe-2">people</i> 
            Animaliers Peulhs
        </div>
        <div class="col mx-auto text-center bg-gray cursor py-1 ps-5 d-flex"  id="trelation"  onclick="showSection_t('Trelation')">
            <i class="material-icons text-center pe-2">thumbs_up_down</i>
            Les Mises bas
        </div>
        <div class="col mx-auto text-center bg-gray cursor py-1 ps-5 d-flex" id="tanimaux" onclick="showSection_t('Tanimaux')"> 
            <i class="material-icons text-center pe-2">border_color</i> 
            Animaux Enregistrés
        </div>
        <div class="col mx-auto text-center bg-gray cursor py-1 ps-5 rounded-end d-flex" id="tbetails" onclick="showSection_t('Tbetails')">
            <i class="material-icons text-center pe-2">amonetization_on</i>
            Bétails Vendus
        </div>
    </div>
      <section class="my-4 hideTanimalier mx-3">
        <div class="row">
          <div class="col-lg-12 col-md-9 mb-md-0 mb-4">
            <div class="card">
              <div class="card-header pb-0">
                <div class="row">
                  <div class="col-lg-6 col-7">
                    <h6>Nos Animaliers Peulhs</h6>
                    <p class="text-sm mb-0">
                      <i class="fa fa-check text-info" aria-hidden="true"></i>
                      <span class="font-weight-bold ms-1">06 groupes peulhs de</span> Borgou
                      <span><i><a href="../../solution-bovinsolution/info-animalier.php">Demander un Animalier</a></i></span>
                    </p>
                  </div>
                  <div class="col-lg-6 col-5 my-auto text-end">
                    <div class="dropdown float-lg-end pe-4">
                      <a class="cursor-pointer" id="dropdownTable" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fa fa-ellipsis-v text-secondary"></i>
                      </a>
                      <ul class="dropdown-menu px-2 py-3 ms-sm-n4 ms-n5" aria-labelledby="dropdownTable">
                        <li><a class="dropdown-item border-radius-md" href="javascript:;">Voir tout</a></li>
                        <!-- <li><a class="dropdown-item border-radius-md" href="javascript:;">Autre actions</a></li>
                        <li><a class="dropdown-item border-radius-md" href="javascript:;">Autre chose ici</a></li> -->
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-body px-0 pb-2">
                <div class="table-responsive">
                  <table class="table align-items-center mb-0">
                    <thead>
                      <tr>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Animaliers Peulhs</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Collaborateurs</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Budget</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Progression</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>
                          <div class="d-flex px-2 py-1">
                            <div>
                              <img src="../../img/img-peulh/Man_Silhouette.png" class="avatar avatar-sm me-3" alt="xd">
                            </div>
                            <div class="d-flex flex-column justify-content-center">
                              <h6 class="mb-0 text-sm">Manouton Koffi</h6>
                            </div>
                          </div>
                        </td>
                        <td>
                          <div class="avatar-group mt-2">
                            <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Ryan Tompson">
                              <img src="../assets/img/team-1.jpg" alt="team1">
                            </a>
                            <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Romina Hadid">
                              <img src="../assets/img/team-2.jpg" alt="team2">
                            </a>
                            <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Alexander Smith">
                              <img src="../assets/img/team-3.jpg" alt="team3">
                            </a>
                            <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Jessica Doe">
                              <img src="../assets/img/team-4.jpg" alt="team4">
                            </a>
                          </div>
                        </td>
                        <td class="align-middle text-center text-sm">
                          <span class="text-xs font-weight-bold"> 1,400,000 XOF</span>
                        </td>
                        <td class="align-middle">
                          <div class="progress-wrapper w-25 mx-auto">
                            <div class="progress-info">
                              <div class="progress-percentage">
                                <span class="text-xs font-weight-bold">60%</span>
                              </div>
                            </div>
                            <div class="progress">
                              <div class="progress-bar bg-gradient-info w-60" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="d-flex px-2 py-1">
                            <div>
                              <img src="../../img/img-peulh/Man_Silhouette.png" class="avatar avatar-sm me-3" alt="atlassian">
                            </div>
                            <div class="d-flex flex-column justify-content-center">
                              <h6 class="mb-0 text-sm">AGOSSOU Christian</h6>
                            </div>
                          </div>
                        </td>
                        <td>
                          <div class="avatar-group mt-2">
                            <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Romina Hadid">
                              <img src="../assets/img/team-2.jpg" alt="team5">
                            </a>
                            <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Jessica Doe">
                              <img src="../assets/img/team-4.jpg" alt="team6">
                            </a>
                          </div>
                        </td>
                        <td class="align-middle text-center text-sm">
                          <span class="text-xs font-weight-bold"> 300,000 XOF</span>
                        </td>
                        <td class="align-middle">
                          <div class="progress-wrapper w-25 mx-auto">
                            <div class="progress-info">
                              <div class="progress-percentage">
                                <span class="text-xs font-weight-bold">10%</span>
                              </div>
                            </div>
                            <div class="progress">
                              <div class="progress-bar bg-gradient-info w-10" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="d-flex px-2 py-1">
                            <div>
                              <img src="../../img/img-peulh/Man_Silhouette.png" class="avatar avatar-sm me-3" alt="team7">
                            </div>
                            <div class="d-flex flex-column justify-content-center">
                              <h6 class="mb-0 text-sm">Bloukoutou Jean</h6>
                            </div>
                          </div>
                        </td>
                        <td>
                          <div class="avatar-group mt-2">
                            <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Romina Hadid">
                              <img src="../assets/img/team-3.jpg" alt="team8">
                            </a>
                            <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Jessica Doe">
                              <img src="../assets/img/team-1.jpg" alt="team9">
                            </a>
                          </div>
                        </td>
                        <td class="align-middle text-center text-sm">
                          <span class="text-xs font-weight-bold"> --- </span>
                        </td>
                        <td class="align-middle">
                          <div class="progress-wrapper w-25 mx-auto">
                            <div class="progress-info">
                              <div class="progress-percentage">
                                <span class="text-xs font-weight-bold">100%</span>
                              </div>
                            </div>
                            <div class="progress">
                              <div class="progress-bar bg-gradient-success w-100" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="d-flex px-2 py-1">
                            <div>
                              <img src="../../img/img-peulh/Man_Silhouette.png" class="avatar avatar-sm me-3" alt="spotify">
                            </div>
                            <div class="d-flex flex-column justify-content-center">
                              <h6 class="mb-0 text-sm">Adje Robert</h6>
                            </div>
                          </div>
                        </td>
                        <td>
                          <div class="avatar-group mt-2">
                            <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Ryan Tompson">
                              <img src="../assets/img/team-4.jpg" alt="user1">
                            </a>
                            <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Romina Hadid">
                              <img src="../assets/img/team-3.jpg" alt="user2">
                            </a>
                            <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Alexander Smith">
                              <img src="../assets/img/team-4.jpg" alt="user3">
                            </a>
                            <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Jessica Doe">
                              <img src="../assets/img/team-1.jpg" alt="user4">
                            </a>
                          </div>
                        </td>
                        <td class="align-middle text-center text-sm">
                          <span class="text-xs font-weight-bold"> 2,500,000 XOF</span>
                        </td>
                        <td class="align-middle">
                          <div class="progress-wrapper w-25 mx-auto">
                            <div class="progress-info">
                              <div class="progress-percentage">
                                <span class="text-xs font-weight-bold">100%</span>
                              </div>
                            </div>
                            <div class="progress">
                              <div class="progress-bar bg-gradient-success w-100" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="d-flex px-2 py-1">
                            <div>
                              <img src="../../img/img-peulh/Man_Silhouette.png" class="avatar avatar-sm me-3" alt="jira">
                            </div>
                            <div class="d-flex flex-column justify-content-center">
                              <h6 class="mb-0 text-sm">Nounagnon Béni de Dieu</h6>
                            </div>
                          </div>
                        </td>
                        <td>
                          <div class="avatar-group mt-2">
                            <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Ryan Tompson">
                              <img src="../assets/img/team-4.jpg" alt="user5">
                            </a>
                          </div>
                        </td>
                        <td class="align-middle text-center text-sm">
                          <span class="text-xs font-weight-bold"> 50,000 XOF </span>
                        </td>
                        <td class="align-middle">
                          <div class="progress-wrapper w-25 mx-auto">
                            <div class="progress-info">
                              <div class="progress-percentage">
                                <span class="text-xs font-weight-bold">25%</span>
                              </div>
                            </div>
                            <div class="progress">
                              <div class="progress-bar bg-gradient-info w-25" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="25"></div>
                            </div>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="d-flex px-2 py-1">
                            <div>
                              <img src="../../img/img-peulh/Man_Silhouette.png" class="avatar avatar-sm me-3" alt="invision">
                            </div>
                            <div class="d-flex flex-column justify-content-center">
                              <h6 class="mb-0 text-sm">Zougou Valentin</h6>
                            </div>
                          </div>
                        </td>
                        <td>
                          <div class="avatar-group mt-2">
                            <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Ryan Tompson">
                              <img src="../assets/img/team-1.jpg" alt="user6">
                            </a>
                            <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Jessica Doe">
                              <img src="../assets/img/team-4.jpg" alt="user7">
                            </a>
                          </div>
                        </td>
                        <td class="align-middle text-center text-sm">
                          <span class="text-xs font-weight-bold"> 200,000 XOF</span>
                        </td>
                        <td class="align-middle">
                          <div class="progress-wrapper w-25 mx-auto">
                            <div class="progress-info">
                              <div class="progress-percentage">
                                <span class="text-xs font-weight-bold">40%</span>
                              </div>
                            </div>
                            <div class="progress">
                              <div class="progress-bar bg-gradient-info w-40" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="40"></div>
                            </div>
                          </div>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>  
      </section>
      <section class="my-4 hideTrelation mx-3">
        <div class="row">
          <div class="col-12">
            <div class="card mb-4">
              <div class="card-header pb-0">
                <h6 class="font-weight-bolder">Les mises bas du mois</h6>
                <p class="font-weight-bold mb-3">
                  <a href="chat.php">
                    <i class="fas fa-smile"></i> Retrouvez tous les mises bas prévues
                  </a>
                </p>
              </div>
              <div class="card-body px-0 pt-0 pb-2">
                <div class="table-responsive p-0">
                  <table class="table align-items-center mb-0">
                    <thead>
                      <tr>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Bovin Enceinte</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Fonction</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Etat</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Dâte de terme</th>
                        <th class="text-secondary opacity-7">Bovins nés</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>
                          <div class="d-flex px-2 py-1">
                            <div>
                              <img src="../../img/img-peulh/logo.png" class="avatar avatar-sm me-3" alt="user1">
                            </div>
                            <div class="d-flex flex-column justify-content-center">
                              <h6 class="mb-0 text-sm">VACHE</h6>
                            </div>
                          </div>
                        </td>
                        <td>
                          <p class="text-xs font-weight-bold mb-0">Manager</p>
                          <p class="text-xs text-secondary mb-0">Organization</p>
                        </td>
                        <td class="align-middle text-center text-sm">
                          <span class="badge badge-sm bg-gradient-success">A terme</span>
                        </td>
                        <td class="align-middle text-center">
                          <span class="text-secondary text-xs font-weight-bold">23/04/18</span>
                        </td>
                        <td class="align-middle">
                          <a href="#" class="text-secondary font-weight-bold text-xs ps-5" data-toggle="tooltip" data-original-title="Envoyer un Message Utilisateur" title="Envoyez un message à cet acheteur">
                            03
                          </a>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="d-flex px-2 py-1">
                            <div>
                              <img src="../../img/img-peulh/logo.png" class="avatar avatar-sm me-3" alt="Utilisateur2">
                            </div>
                            <div class="d-flex flex-column justify-content-center">
                              <h6 class="mb-0 text-sm">BOEUF</h6>
                            </div>
                          </div>
                        </td>
                        <td>
                          <p class="text-xs font-weight-bold mb-0">Programator</p>
                          <p class="text-xs text-secondary mb-0">Developer</p>
                        </td>
                        <td class="align-middle text-center text-sm">
                          <span class="badge badge-sm bg-gradient-secondary">En cours</span>
                        </td>
                        <td class="align-middle text-center">
                          <span class="text-secondary text-xs font-weight-bold">11/01/19</span>
                        </td>
                        <td class="align-middle">
                          <a href="#" class="text-secondary font-weight-bold text-xs ps-5" data-toggle="tooltip" data-original-title="Envoyer un Message Utilisateur" title="Envoyez un message à cet acheteur">
                            --
                          </a>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="d-flex px-2 py-1">
                            <div>
                              <img src="../../img/img-peulh/logo.png" class="avatar avatar-sm me-3" alt="user3">
                            </div>
                            <div class="d-flex flex-column justify-content-center">
                              <h6 class="mb-0 text-sm">TAURAUX</h6>
                            </div>
                          </div>
                        </td>
                        <td>
                          <p class="text-xs font-weight-bold mb-0">Executive</p>
                          <p class="text-xs text-secondary mb-0">Bovins</p>
                        </td>
                        <td class="align-middle text-center text-sm">
                          <span class="badge badge-sm bg-gradient-success">A terme</span>
                        </td>
                        <td class="align-middle text-center">
                          <span class="text-secondary text-xs font-weight-bold">19/09/17</span>
                        </td>
                        <td class="align-middle">
                          <a href="#" class="text-secondary font-weight-bold text-xs ps-5" data-toggle="tooltip" data-original-title="Envoyer un Message Utilisateur" title="Envoyez un message à cet acheteur">
                            01
                          </a>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="d-flex px-2 py-1">
                            <div>
                              <img src="../../img/img-peulh/logo.png" class="avatar avatar-sm me-3" alt="user4">
                            </div>
                            <div class="d-flex flex-column justify-content-center">
                              <h6 class="mb-0 text-sm">VACHE</h6>
                            </div>
                          </div>
                        </td>
                        <td>
                          <p class="text-xs font-weight-bold mb-0">Programator</p>
                          <p class="text-xs text-secondary mb-0">Developer</p>
                        </td>
                        <td class="align-middle text-center text-sm">
                          <span class="badge badge-sm bg-gradient-success">A terme</span>
                        </td>
                        <td class="align-middle text-center">
                          <span class="text-secondary text-xs font-weight-bold">24/12/08</span>
                        </td>
                        <td class="align-middle">
                          <a href="chat.php" class="text-secondary font-weight-bold text-xs ps-5" data-toggle="tooltip" data-original-title="Envoyer un Message Utilisateur" title="Envoyez un message à cet acheteur">
                            10
                          </a>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="d-flex px-2 py-1">
                            <div>
                              <img src="../../img/img-peulh/logo.png" class="avatar avatar-sm me-3" alt="user5">
                            </div>
                            <div class="d-flex flex-column justify-content-center">
                              <h6 class="mb-0 text-sm">VAUX</h6>
                            </div>
                          </div>
                        </td>
                        <td>
                          <p class="text-xs font-weight-bold mb-0">Manager</p>
                          <p class="text-xs text-secondary mb-0">Executive</p>
                        </td>
                        <td class="align-middle text-center text-sm">
                          <span class="badge badge-sm bg-gradient-secondary">En cours</span>
                        </td>
                        <td class="align-middle text-center">
                          <span class="text-secondary text-xs font-weight-bold">04/10/21</span>
                        </td>
                        <td class="align-middle">
                          <a href="chat.php" class="text-secondary font-weight-bold text-xs ps-5" data-toggle="tooltip" data-original-title="Envoyer un Message Utilisateur" title="Envoyez un message à cet acheteur">
                            --
                          </a>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="d-flex px-2 py-1">
                            <div>
                              <img src="../../img/img-peulh/logo.png" class="avatar avatar-sm me-3" alt="user6">
                            </div>
                            <div class="d-flex flex-column justify-content-center">
                              <h6 class="mb-0 text-sm">VACHE</h6>
                            </div>
                          </div>
                        </td>
                        <td>
                          <p class="text-xs font-weight-bold mb-0">Programtor</p>
                          <p class="text-xs text-secondary mb-0">Developer</p>
                        </td>
                        <td class="align-middle text-center text-sm">
                          <span class="badge badge-sm bg-gradient-secondary">En cours</span>
                        </td>
                        <td class="align-middle text-center">
                          <span class="text-secondary text-xs font-weight-bold">14/09/20</span>
                        </td>
                        <td class="align-middle">
                          <a href="chat.php" class="text-secondary font-weight-bold text-xs ps-5" data-toggle="tooltip" data-original-title="Envoyer un Message Utilisateur" title="Envoyez un message à cet acheteur">
                            --
                          </a>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>  
      </section>
      <section class="my-4 hideTanimaux mx-3">
        <div class="row">
          <div class="col-12 mt-4">
            <div class="card mb-4">
              <div class="card-header pb-0 p-3">
                <h6 class="mb-1">Animaux Enregistrés</h6>
                <p class="text-sm">Retrouvez ici tous les animaux que vous avez enregistrés.</p>
              </div>
              <div class="card-body p-3">
                <div class="row pb-4">
                  <div class="col-xl-3 col-md-6 mb-xl-0 mb-4">
                    <div class="card card-blog card-plain">
                      <div class="position-relative">
                        <a class="d-block shadow-xl border-radius-xl">
                          <img src="../../img/img-peulh/Animaux Enregistres/animaux-01.jpeg" alt="img-blur-shadow" class="img-fluid shadow border-radius-xl">
                        </a>
                      </div>
                      <div class="card-body px-1 pb-0">
                        <p class="text-gradient text-dark mb-2 text-sm">Bovin #1</p>
                        <a href="javascript:;">
                          <h5>
                            Boeuf 
                          </h5>
                        </a>
                        <p class="mb-4 text-sm">
                          Un boeuf de 3ans qui est bien nouris et bien dodu.
                        </p>
                        <div class="d-flex align-items-center justify-content-between">
                          <button type="button" onclick="clickBovin()" class="btn btn-outline-primary btn-sm mb-0">Voir le Bovin</button>
                          <div class="avatar-group mt-2">
                            <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Elena Morison">
                              <img alt="Image placeholder" src="../assets/img/team-1.jpg">
                            </a>
                            <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Ryan Milly">
                              <img alt="Image placeholder" src="../assets/img/team-2.jpg">
                            </a>
                            <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Nick Daniel">
                              <img alt="Image placeholder" src="../assets/img/team-3.jpg">
                            </a>
                            <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Peterson">
                              <img alt="Image placeholder" src="../assets/img/team-4.jpg">
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-3 col-md-6 mb-xl-0 mb-4">
                    <div class="card card-blog card-plain">
                      <div class="position-relative">
                        <a class="d-block shadow-xl border-radius-xl">
                          <img src="../../img/img-peulh/Animaux Enregistres/animaux-02.jpeg" alt="img-blur-shadow" class="img-fluid shadow border-radius-lg">
                        </a>
                      </div>
                      <div class="card-body px-1 pb-0">
                        <p class="text-gradient text-dark mb-2 text-sm">Bovin #2</p>
                        <a href="javascript:;">
                          <h5>
                            Vache
                          </h5>
                        </a>
                        <p class="mb-4 text-sm">
                          Une vache de 3ans qui est bien nouris et bien dodu.
                        </p>
                        <div class="d-flex align-items-center justify-content-between">
                          <button type="button" onclick="clickBovin()" class="btn btn-outline-primary btn-sm mb-0">Voir le Bovin</button>
                          <div class="avatar-group mt-2">
                            <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Nick Daniel">
                              <img alt="Image placeholder" src="../assets/img/team-3.jpg">
                            </a>
                            <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Peterson">
                              <img alt="Image placeholder" src="../assets/img/team-4.jpg">
                            </a>
                            <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Elena Morison">
                              <img alt="Image placeholder" src="../assets/img/team-1.jpg">
                            </a>
                            <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Ryan Milly">
                              <img alt="Image placeholder" src="../assets/img/team-2.jpg">
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-3 col-md-6 mb-xl-0 mb-4">
                    <div class="card card-blog card-plain">
                      <div class="position-relative">
                        <a class="d-block shadow-xl border-radius-xl">
                          <img src="../../img/img-peulh/Animaux Enregistres/animaux-03.jpeg" alt="img-blur-shadow" class="img-fluid shadow border-radius-xl">
                        </a>
                      </div>
                      <div class="card-body px-1 pb-0">
                        <p class="text-gradient text-dark mb-2 text-sm">Bovin #3</p>
                        <a href="javascript:;">
                          <h5>
                            Taureau
                          </h5>
                        </a>
                        <p class="mb-4 text-sm">
                          Un taureau d'un ans qui est bien nouris et bien dodu.
                        </p>
                        <div class="d-flex align-items-center justify-content-between">
                          <button type="button" onclick="clickBovin()" class="btn btn-outline-primary btn-sm mb-0">Voir le Bovin</button>
                          <div class="avatar-group mt-2">
                            <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Peterson">
                              <img alt="Image placeholder" src="../assets/img/team-4.jpg">
                            </a>
                            <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Nick Daniel">
                              <img alt="Image placeholder" src="../assets/img/team-3.jpg">
                            </a>
                            <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Ryan Milly">
                              <img alt="Image placeholder" src="../assets/img/team-2.jpg">
                            </a>
                            <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Elena Morison">
                              <img alt="Image placeholder" src="../assets/img/team-1.jpg">
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-3 col-md-6 mb-xl-0 mb-4">
                    <div class="card card-blog card-plain">
                      <div class="position-relative">
                        <a class="d-block shadow-xl border-radius-xl">
                          <img src="../../img/img-peulh/Animaux Enregistres/animaux-04.jpeg" alt="img-blur-shadow" class="img-fluid shadow border-radius-xl">
                        </a>
                      </div>
                      <div class="card-body px-1 pb-0">
                        <p class="text-gradient text-dark mb-2 text-sm">Bovin #4</p>
                        <a href="javascript:;">
                          <h5>
                            Boeuf
                          </h5>
                        </a>
                        <p class="mb-4 text-sm">
                          Un boeuf de 3ans qui est bien nouris et bien dodu.
                        </p>
                        <div class="d-flex align-items-center justify-content-between">
                          <button type="button" onclick="clickBovin()" class="btn btn-outline-primary btn-sm mb-0">Voir le Bovin</button>
                          <div class="avatar-group mt-2">
                            <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Peterson">
                              <img alt="Image placeholder" src="../assets/img/team-4.jpg">
                            </a>
                            <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Nick Daniel">
                              <img alt="Image placeholder" src="../assets/img/team-3.jpg">
                            </a>
                            <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Ryan Milly">
                              <img alt="Image placeholder" src="../assets/img/team-2.jpg">
                            </a>
                            <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Elena Morison">
                              <img alt="Image placeholder" src="../assets/img/team-1.jpg">
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row py-4">
                  <div class="col-xl-3 col-md-6 mb-xl-0 mb-4">
                    <div class="card card-blog card-plain">
                      <div class="position-relative">
                        <a class="d-block shadow-xl border-radius-xl">
                          <img src="../../img/img-peulh/Animaux Enregistres/animaux-06.jpg" alt="img-blur-shadow" class="img-fluid shadow border-radius-xl">
                        </a>
                      </div>
                      <div class="card-body px-1 pb-0">
                        <p class="text-gradient text-dark mb-2 text-sm">Bovin #5</p>
                        <a href="javascript:;">
                          <h5>
                            Vaux
                          </h5>
                        </a>
                        <p class="mb-4 text-sm">
                          Un vaux de 3ans qui est bien nouris et bien dodu.
                        </p>
                        <div class="d-flex align-items-center justify-content-between">
                          <button type="button" onclick="clickBovin()" class="btn btn-outline-primary btn-sm mb-0">Voir le Bovin</button>
                          <div class="avatar-group mt-2">
                            <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Elena Morison">
                              <img alt="Image placeholder" src="../assets/img/team-1.jpg">
                            </a>
                            <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Ryan Milly">
                              <img alt="Image placeholder" src="../assets/img/team-2.jpg">
                            </a>
                            <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Nick Daniel">
                              <img alt="Image placeholder" src="../assets/img/team-3.jpg">
                            </a>
                            <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Peterson">
                              <img alt="Image placeholder" src="../assets/img/team-4.jpg">
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-3 col-md-6 mb-xl-0 mb-4">
                    <div class="card card-blog card-plain">
                      <div class="position-relative">
                        <a class="d-block shadow-xl border-radius-xl">
                          <img src="../../img/img-peulh/Animaux Enregistres/animaux-06.jpg" alt="img-blur-shadow" class="img-fluid shadow border-radius-lg">
                        </a>
                      </div>
                      <div class="card-body px-1 pb-0">
                        <p class="text-gradient text-dark mb-2 text-sm">Bovin #6</p>
                        <a href="javascript:;">
                          <h5>
                            Vache
                          </h5>
                        </a>
                        <p class="mb-4 text-sm">
                          Une vache de 3ans qui est bien nouris et bien dodu.
                        </p>
                        <div class="d-flex align-items-center justify-content-between">
                          <button type="button" onclick="clickBovin()" class="btn btn-outline-primary btn-sm mb-0">Voir le Bovin</button>
                          <div class="avatar-group mt-2">
                            <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Nick Daniel">
                              <img alt="Image placeholder" src="../assets/img/team-3.jpg">
                            </a>
                            <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Peterson">
                              <img alt="Image placeholder" src="../assets/img/team-4.jpg">
                            </a>
                            <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Elena Morison">
                              <img alt="Image placeholder" src="../assets/img/team-1.jpg">
                            </a>
                            <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Ryan Milly">
                              <img alt="Image placeholder" src="../assets/img/team-2.jpg">
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-3 col-md-6 mb-xl-0 mb-4">
                    <div class="card card-blog card-plain">
                      <div class="position-relative">
                        <a class="d-block shadow-xl border-radius-xl">
                          <img src="../../img/img-peulh/Animaux Enregistres/animaux-06.jpg" alt="img-blur-shadow" class="img-fluid shadow border-radius-xl">
                        </a>
                      </div>
                      <div class="card-body px-1 pb-0">
                        <p class="text-gradient text-dark mb-2 text-sm">Bovin #7</p>
                        <a href="javascript:;">
                          <h5>
                            Boeuf
                          </h5>
                        </a>
                        <p class="mb-4 text-sm">
                          Un boeuf de 3ans qui est bien nouris et bien dodu.
                        </p>
                        <div class="d-flex align-items-center justify-content-between">
                          <button type="button" onclick="clickBovin()" class="btn btn-outline-primary btn-sm mb-0">Voir le Bovin</button>
                          <div class="avatar-group mt-2">
                            <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Peterson">
                              <img alt="Image placeholder" src="../assets/img/team-4.jpg">
                            </a>
                            <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Nick Daniel">
                              <img alt="Image placeholder" src="../assets/img/team-3.jpg">
                            </a>
                            <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Ryan Milly">
                              <img alt="Image placeholder" src="../assets/img/team-2.jpg">
                            </a>
                            <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Elena Morison">
                              <img alt="Image placeholder" src="../assets/img/team-1.jpg">
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-3 col-md-6 mb-xl-0 mb-4">
                    <div class="card h-100 card-plain border">
                      <div class="card-body d-flex flex-column justify-content-center text-center">
                        <a href="pop-up-nouveau-bovin.php">
                          <i class="fa fa-plus text-secondary mb-3"></i>
                          <h5 class=" text-secondary"> Nouvel Animal </h5>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>  
      </section>
      <section class="my-4 hideTbetails mx-3">
        <div class="row">
          <div class="col-lg-12 col-md-9 mb-md-0 mb-4">
            <div class="card">
              <div class="card-header pb-0">
                <div class="row">
                  <div class="col-lg-6 col-7">
                    <h6>Bétails Vendus</h6>
                    <p class="text-sm mb-0">
                      <i class="fa fa-check text-info" aria-hidden="true"></i>
                      <span class="font-weight-bold ms-1">30 ventes assurées</span> ce mois
                      <a href="javascript:;" onclick="clickAnimEnreg()">
                        <i><u>Mettre un bovin en vente  ?</u></i>
                      </a>
                    </p>
                  </div>
                  <div class="col-lg-6 col-5 my-auto text-end">
                    <div class="dropdown float-lg-end pe-4">
                      <a class="cursor-pointer" id="dropdownTable" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fa fa-ellipsis-v text-secondary"></i>
                      </a>
                      <ul class="dropdown-menu px-2 py-3 ms-sm-n4 ms-n5" aria-labelledby="dropdownTable">
                        <li><a class="dropdown-item border-radius-md" href="javascript:;">Voir tout</a></li>
                        <!-- <li><a class="dropdown-item border-radius-md" href="javascript:;">Autre actions</a></li>
                        <li><a class="dropdown-item border-radius-md" href="javascript:;">Autre chose ici</a></li> -->
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-body px-0 pb-2">
                <div class="table-responsive">
                  <table class="table align-items-center mb-0">
                    <thead>
                      <tr>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Bétails Disponibles</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Prix</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Etat</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>
                          <div class="d-flex px-2 py-1">
                            <div>
                              <img src="../../img/img-peulh/Animaux Enregistres/animaux-06.jpg" class="avatar avatar-sm me-3" alt="xd">
                            </div>
                            <div class="d-flex flex-column justify-content-center">
                              <h6 class="mb-0 text-sm">Boeuf</h6>
                            </div>
                          </div>
                        </td>
                        <td class="align-middle text-center text-sm">
                          <span class="text-xs font-weight-bold"> 1,400,000 XOF</span>
                        </td>
                        <td class="align-middle text-center text-sm">
                          <span class="badge badge-sm bg-gradient-success">Vendu</span>
                        </td>
                        <td class="align-middle text-center text-sm">
                          <a href="javascript:;">
                            <i class="fa fa-close" title="Retirer"></i>
                          </a>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="d-flex px-2 py-1">
                            <div>
                              <img src="../../img/img-peulh/Animaux Enregistres/animaux-04.jpeg" class="avatar avatar-sm me-3" alt="atlassian">
                            </div>
                            <div class="d-flex flex-column justify-content-center">
                              <h6 class="mb-0 text-sm">Vaux</h6>
                            </div>
                          </div>
                        </td>
                        <td class="align-middle text-center text-sm">
                          <span class="text-xs font-weight-bold"> 300,000 XOF</span>
                        </td>
                        <td class="align-middle text-center text-sm">
                          <span class="badge badge-sm bg-gradient-secondary">En vente</span>
                        </td>
                        <td class="align-middle text-center text-sm">
                          <a href="pop-up-edit-bovin.php">
                            <i class="material-icons pe-4" title="Editer">edit</i>
                          </a>
                          <a href="javascript:;">
                            <i class="material-icons" title="Retirer">close</i>
                          </a>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="d-flex px-2 py-1">
                            <div>
                              <img src="../../img/img-peulh/Animaux Enregistres/animaux-03.jpeg" class="avatar avatar-sm me-3" alt="team7">
                            </div>
                            <div class="d-flex flex-column justify-content-center">
                              <h6 class="mb-0 text-sm">Taureau</h6>
                            </div>
                          </div>
                        </td>
                        <td class="align-middle text-center text-sm">
                          <span class="text-xs font-weight-bold"> 600,000 XOF </span>
                        </td>
                        <td class="align-middle text-center text-sm">
                          <span class="badge badge-sm bg-gradient-success">Vendu</span>
                        </td>
                        <td class="align-middle text-center text-sm">
                          <a href="javascript:;">
                            <i class="material-icons" title="Retirer">close</i>
                          </a>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="d-flex px-2 py-1">
                            <div>
                              <img src="../../img/img-peulh/Animaux Enregistres/animaux-02.jpeg" class="avatar avatar-sm me-3" alt="spotify">
                            </div>
                            <div class="d-flex flex-column justify-content-center">
                              <h6 class="mb-0 text-sm">Vache</h6>
                            </div>
                          </div>
                        </td>
                        <td class="align-middle text-center text-sm">
                          <span class="text-xs font-weight-bold"> 2,500,000 XOF</span>
                        </td>
                        <td class="align-middle text-center text-sm">
                          <span class="badge badge-sm bg-gradient-success">Vendu</span>
                        </td>
                        <td class="align-middle text-center text-sm">
                          <a href="javascript:;">
                            <i class="material-icons" title="Retirer">close</i>
                          </a>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="d-flex px-2 py-1">
                            <div>
                              <img src="../../img/img-peulh/Animaux Enregistres/animaux-01.jpeg" class="avatar avatar-sm me-3" alt="jira">
                            </div>
                            <div class="d-flex flex-column justify-content-center">
                              <h6 class="mb-0 text-sm">Boeuf</h6>
                            </div>
                          </div>
                        </td>
                        <td class="align-middle text-center text-sm">
                          <span class="text-xs font-weight-bold"> 500,000 XOF </span>
                        </td>
                        <td class="align-middle text-center text-sm">
                          <span class="badge badge-sm bg-gradient-secondary">En Vente</span>
                        </td>
                        <td class="align-middle text-center text-sm">
                          <a href="pop-up-edit-bovin.php">
                            <i class="material-icons pe-4" title="Editer">edit</i>
                          </a>
                          <a href="javascript:;">
                            <i class="material-icons" title="Retirer">close</i>
                          </a>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="d-flex px-2 py-1">
                            <div>
                              <img src="../../img/img-peulh/Animaux Enregistres/animaux-05.jpeg" class="avatar avatar-sm me-3" alt="invision">
                            </div>
                            <div class="d-flex flex-column justify-content-center">
                              <h6 class="mb-0 text-sm">Vaux</h6>
                            </div>
                          </div>
                        </td>
                        <td class="align-middle text-center text-sm">
                          <span class="text-xs font-weight-bold"> 200,000 XOF</span>
                        </td>
                        <td class="align-middle text-center text-sm">
                          <span class="badge badge-sm bg-gradient-success">Vendu</span>
                        </td>
                        <td class="align-middle text-center text-sm">
                          <a href="javascript:;">
                            <i class="material-icons" title="Retirer">close</i>
                          </a>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>  
      </section>
      
      <!-- <footer class="footer pt-3  ">
        <div class="container-fluid">
          <div class="row align-items-center justify-content-lg-between">
            <div class="col-lg-6 mb-lg-0 mb-4">
              <div class="copyright text-center text-sm text-muted text-lg-start">
                © <script>
                  document.write(new Date().getFullYear())
                </script>,
                made with <i class="fa fa-heart"></i> by
                <a href="https://www.creative-tim.com" class="font-weight-bold" target="_blank">Creative Tim</a>
                for a better web.
              </div>
            </div>
            <div class="col-lg-6">
              <ul class="nav nav-footer justify-content-center justify-content-lg-end">
                <li class="nav-item">
                  <a href="https://www.creative-tim.com" class="nav-link text-muted" target="_blank">Creative Tim</a>
                </li>
                <li class="nav-item">
                  <a href="https://www.creative-tim.com/presentation" class="nav-link text-muted" target="_blank">About Us</a>
                </li>
                <li class="nav-item">
                  <a href="https://www.creative-tim.com/blog" class="nav-link text-muted" target="_blank">Blog</a>
                </li>
                <li class="nav-item">
                  <a href="https://www.creative-tim.com/license" class="nav-link pe-0 text-muted" target="_blank">License</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </footer> -->
    </div>
  </main>
  <div class="fixed-plugin">
    <a class="fixed-plugin-button text-dark position-fixed px-3 py-2">
      <i class="fa fa-cog py-2"> </i>
    </a>
    <div class="card shadow-lg ">
      <div class="card-header pb-0 pt-3 ">
        <div class="float-start">
          <h5 class="mt-3 mb-0">Soft UI Configurator</h5>
          <p>See our dashboard options.</p>
        </div>
        <div class="float-end mt-4">
          <button class="btn btn-link text-dark p-0 fixed-plugin-close-button">
            <i class="fa fa-close"></i>
          </button>
        </div>
        <!-- End Toggle Button -->
      </div>
      <hr class="horizontal dark my-1">
      <div class="card-body pt-sm-3 pt-0">
        <!-- Sidebar Backgrounds -->
        <div>
          <h6 class="mb-0">Sidebar Colors</h6>
        </div>
        <a href="javascript:void(0)" class="switch-trigger background-color">
          <div class="badge-colors my-2 text-start">
            <span class="badge filter bg-gradient-primary active" data-color="primary" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-dark" data-color="dark" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-info" data-color="info" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-success" data-color="success" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-warning" data-color="warning" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-danger" data-color="danger" onclick="sidebarColor(this)"></span>
          </div>
        </a>
        <!-- Sidenav Type -->
        <div class="mt-3">
          <h6 class="mb-0">Sidenav Type</h6>
          <p class="text-sm">Choose between 2 different sidenav types.</p>
        </div>
        <div class="d-flex">
          <button class="btn bg-gradient-primary w-100 px-3 mb-2 active" data-class="bg-transparent" onclick="sidebarType(this)">Transparent</button>
          <button class="btn bg-gradient-primary w-100 px-3 mb-2 ms-2" data-class="bg-white" onclick="sidebarType(this)">White</button>
        </div>
        <p class="text-sm d-xl-none d-block mt-2">You can change the sidenav type just on desktop view.</p>
        <!-- Navbar Fixed -->
        <div class="mt-3">
          <h6 class="mb-0">Navbar Fixed</h6>
        </div>
        <div class="form-check form-switch ps-0">
          <input class="form-check-input mt-1 ms-auto" type="checkbox" id="navbarFixed" onclick="navbarFixed(this)">
        </div>
        <hr class="horizontal dark my-sm-4">
        <a class="btn bg-gradient-dark w-100" href="https://www.creative-tim.com/product/soft-ui-dashboard">Free Download</a>
        <a class="btn btn-outline-dark w-100" href="https://www.creative-tim.com/learning-lab/bootstrap/license/soft-ui-dashboard">Voir la documentation</a>
        <div class="w-100 text-center">
          <a class="github-button" href="https://github.com/creativetimofficial/soft-ui-dashboard" data-icon="octicon-star" data-size="large" data-show-count="true" aria-label="Star creativetimofficial/soft-ui-dashboard on GitHub">Star</a>
          <h6 class="mt-3">Thank you for sharing!</h6>
          <a href="https://twitter.com/intent/tweet?text=Check%20Soft%20UI%20Dashboard%20made%20by%20%40CreativeTim%20%23webdesign%20%23dashboard%20%23bootstrap5&amp;url=https%3A%2F%2Fwww.creative-tim.com%2Fproduct%2Fsoft-ui-dashboard" class="btn btn-dark mb-0 me-2" target="_blank">
            <i class="fab fa-twitter me-1" aria-hidden="true"></i> Tweet
          </a>
          <a href="https://www.facebook.com/sharer/sharer.php?u=https://www.creative-tim.com/product/soft-ui-dashboard" class="btn btn-dark mb-0 me-2" target="_blank">
            <i class="fab fa-facebook-square me-1" aria-hidden="true"></i> Share
          </a>
        </div>
      </div>
    </div>
  </div>
  <!--   Core JS Files   -->
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
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/soft-ui-dashboard.min.js?v=1.0.7"></script>

  <!-- Navigation dans les options -->
  <script>
    const sections1 = document.querySelectorAll('.hideTanimalier, .hideTrelation, .hideTanimaux, .hideTbetails');
    const selectTanimalier = document.getElementById('tanimalier');
    const selectTrelation = document.getElementById('trelation');
    const selectTanimaux = document.getElementById('tanimaux');
    const selectTbetails = document.getElementById('tbetails');

    function clickAnimEnreg(){
      selectTanimaux.click();
    }
    function clickBovin(){
      location.href = "pop-up-bovin-en-vente.php";
    }

    function showSection_t(section) {
        sections1.forEach(sec => sec.style.display = 'none');
        document.querySelector('.hide' + section).style.display = 'block';
    }
    selectTanimalier.style.color = "white";
    // Partie sélection
    selectTanimalier.addEventListener('click', function(){
        selectTanimalier.style.backgroundImage = "linear-gradient(310deg, #ffc107 0%, #28a745 100%)";
        selectTrelation.style.backgroundImage = "linear-gradient(310deg, #D9D9D9 0%, #D9D9D9 100%)";
        selectTanimaux.style.backgroundImage = "linear-gradient(310deg, #D9D9D9 0%, #D9D9D9 100%)";
        selectTbetails.style.backgroundImage = "linear-gradient(310deg, #D9D9D9 0%, #D9D9D9 100%)";
        selectTanimalier.style.color = "white";
        selectTrelation.style.color = "black";
        selectTanimaux.style.color = "black";
        selectTbetails.style.color = "black";
    });
    selectTrelation.addEventListener('click', function(){
        selectTrelation.style.backgroundImage = "linear-gradient(310deg, #ffc107 0%, #28a745 100%)";
        selectTanimalier.style.backgroundImage = "linear-gradient(310deg, #D9D9D9 0%, #D9D9D9 100%)";
        selectTanimaux.style.backgroundImage = "linear-gradient(310deg, #D9D9D9 0%, #D9D9D9 100%)";
        selectTbetails.style.backgroundImage = "linear-gradient(310deg, #D9D9D9 0%, #D9D9D9 100%)";
        selectTrelation.style.color = "white";
        selectTanimaux.style.color = "black";
        selectTanimalier.style.color = "black";
        selectTbetails.style.color = "black";
    });
    selectTanimaux.addEventListener('click', function(){
        selectTanimaux.style.backgroundImage = "linear-gradient(310deg, #ffc107 0%, #28a745 100%)";
        selectTrelation.style.backgroundImage = "linear-gradient(310deg, #D9D9D9 0%, #D9D9D9 100%)";
        selectTanimalier.style.backgroundImage = "linear-gradient(310deg, #D9D9D9 0%, #D9D9D9 100%)";
        selectTbetails.style.backgroundImage = "linear-gradient(310deg, #D9D9D9 0%, #D9D9D9 100%)";
        selectTanimaux.style.color = "white";
        selectTanimalier.style.color = "black";
        selectTrelation.style.color = "black";
        selectTbetails.style.color = "black";
    });
    selectTbetails.addEventListener('click', function(){
      selectTbetails.style.backgroundImage = "linear-gradient(310deg, #ffc107 0%, #28a745 100%)";
      selectTrelation.style.backgroundImage = "linear-gradient(310deg, #D9D9D9 0%, #D9D9D9 100%)";
      selectTanimalier.style.backgroundImage = "linear-gradient(310deg, #D9D9D9 0%, #D9D9D9 100%)";
      selectTanimaux.style.backgroundImage = "linear-gradient(310deg, #D9D9D9 0%, #D9D9D9 100%)";
      selectTbetails.style.color = "white";
      selectTanimaux.style.color = "black";
      selectTanimalier.style.color = "black";
      selectTrelation.style.color = "black";
    });
  </script>

</body>

</html>