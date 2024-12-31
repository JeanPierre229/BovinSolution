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
  }0
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
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">N°</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Noms</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Taille du cheptel</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Mise Bas</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Prophylaxie</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Fautes réalisées</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">SAnctions reçues</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Salaires payées</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Avance reçues</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Dettes</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>
                          <div class="d-flex px-2 py-1">
                            <span>#1</span>
                          </div>
                        </td>
                        <td>
                            <div class="avatar-group mt-2">
                                <h6 class="text-xxs">MANOUTON</h6>
                            </div>
                        </td>
                        <td class="align-middle text-sm">
                          <span class="text-xs font-weight-bold"> 34000</span>
                        </td>
                        <td class="align-middle">
                          <div class="progress-wrapper w-25 mx-auto">
                            <div class="progress-info">
                              <div class="progress-percentage">
                                <span class="text-xs font-weight-bold">60</span>
                              </div>
                            </div>
                          </div>
                        </td>
                        <td class="align-middle">
                            <div class="progress-wrapper w-25 mx-auto">
                                <div class="progress-info">
                                    <div class="progress-percentage">
                                        <span class="text-xs font-weight-bold">80</span>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td class="align-middle">
                            <div class="progress-wrapper w-25 mx-auto">
                                <div class="progress-info">
                                    <div class="progress-percentage">
                                        <span class="text-xs font-weight-bold">80</span>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td class="align-middle">
                            <div class="progress-wrapper w-25 mx-auto">
                                <div class="progress-info">
                                    <div class="progress-percentage">
                                        <span class="text-xs font-weight-bold">80</span>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td class="align-middle">
                            <div class="progress-wrapper w-25 mx-auto">
                                <div class="progress-info">
                                    <div class="progress-percentage">
                                        <span class="text-xs font-weight-bold">80</span>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td class="align-middle">
                            <div class="progress-wrapper w-25 mx-auto">
                                <div class="progress-info">
                                    <div class="progress-percentage">
                                        <span class="text-xs font-weight-bold">80</span>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td class="align-middle">
                            <div class="progress-wrapper w-25 mx-auto">
                                <div class="progress-info">
                                    <div class="progress-percentage">
                                        <span class="text-xs font-weight-bold">80</span>
                                    </div>
                                </div>
                            </div>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="d-flex px-2 py-1">
                            <span>#2</span>
                          </div>
                        </td>
                        <td>
                            <div class="avatar-group mt-2">
                                <h6 class="text-xxs">MANOUTON</h6>
                            </div>
                        </td>
                        <td class="align-middle text-sm">
                          <span class="text-xs font-weight-bold"> 500</span>
                        </td>
                        <td class="align-middle">
                          <div class="progress-wrapper w-25 mx-auto">
                            <div class="progress-info">
                              <div class="progress-percentage">
                                <span class="text-xs font-weight-bold">60</span>
                              </div>
                            </div>
                          </div>
                        </td>
                        <td class="align-middle">
                            <div class="progress-wrapper w-25 mx-auto">
                                <div class="progress-info">
                                    <div class="progress-percentage">
                                        <span class="text-xs font-weight-bold">80</span>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td class="align-middle">
                            <div class="progress-wrapper w-25 mx-auto">
                                <div class="progress-info">
                                    <div class="progress-percentage">
                                        <span class="text-xs font-weight-bold">80</span>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td class="align-middle">
                            <div class="progress-wrapper w-25 mx-auto">
                                <div class="progress-info">
                                    <div class="progress-percentage">
                                        <span class="text-xs font-weight-bold">80</span>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td class="align-middle">
                            <div class="progress-wrapper w-25 mx-auto">
                                <div class="progress-info">
                                    <div class="progress-percentage">
                                        <span class="text-xs font-weight-bold">80</span>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td class="align-middle">
                            <div class="progress-wrapper w-25 mx-auto">
                                <div class="progress-info">
                                    <div class="progress-percentage">
                                        <span class="text-xs font-weight-bold">80</span>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td class="align-middle">
                            <div class="progress-wrapper w-25 mx-auto">
                                <div class="progress-info">
                                    <div class="progress-percentage">
                                        <span class="text-xs font-weight-bold">80</span>
                                    </div>
                                </div>
                            </div>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="d-flex px-2 py-1">
                            <span>#3</span>
                          </div>
                        </td>
                        <td>
                            <div class="avatar-group mt-2">
                                <h6 class="text-xxs">MANOUTON</h6>
                            </div>
                        </td>
                        <td class="align-middle text-sm">
                          <span class="text-xs font-weight-bold"> 8000</span>
                        </td>
                        <td class="align-middle">
                          <div class="progress-wrapper w-25 mx-auto">
                            <div class="progress-info">
                              <div class="progress-percentage">
                                <span class="text-xs font-weight-bold">60</span>
                              </div>
                            </div>
                          </div>
                        </td>
                        <td class="align-middle">
                            <div class="progress-wrapper w-25 mx-auto">
                                <div class="progress-info">
                                    <div class="progress-percentage">
                                        <span class="text-xs font-weight-bold">80</span>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td class="align-middle">
                            <div class="progress-wrapper w-25 mx-auto">
                                <div class="progress-info">
                                    <div class="progress-percentage">
                                        <span class="text-xs font-weight-bold">80</span>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td class="align-middle">
                            <div class="progress-wrapper w-25 mx-auto">
                                <div class="progress-info">
                                    <div class="progress-percentage">
                                        <span class="text-xs font-weight-bold">80</span>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td class="align-middle">
                            <div class="progress-wrapper w-25 mx-auto">
                                <div class="progress-info">
                                    <div class="progress-percentage">
                                        <span class="text-xs font-weight-bold">80</span>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td class="align-middle">
                            <div class="progress-wrapper w-25 mx-auto">
                                <div class="progress-info">
                                    <div class="progress-percentage">
                                        <span class="text-xs font-weight-bold">80</span>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td class="align-middle">
                            <div class="progress-wrapper w-25 mx-auto">
                                <div class="progress-info">
                                    <div class="progress-percentage">
                                        <span class="text-xs font-weight-bold">80</span>
                                    </div>
                                </div>
                            </div>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="d-flex px-2 py-1">
                            <span>#4</span>
                          </div>
                        </td>
                        <td>
                            <div class="avatar-group mt-2">
                                <h6 class="text-xxs">MANOUTON</h6>
                            </div>
                        </td>
                        <td class="align-middle text-sm">
                          <span class="text-xs font-weight-bold"> 3000</span>
                        </td>
                        <td class="align-middle">
                          <div class="progress-wrapper w-25 mx-auto">
                            <div class="progress-info">
                              <div class="progress-percentage">
                                <span class="text-xs font-weight-bold">60</span>
                              </div>
                            </div>
                          </div>
                        </td>
                        <td class="align-middle">
                            <div class="progress-wrapper w-25 mx-auto">
                                <div class="progress-info">
                                    <div class="progress-percentage">
                                        <span class="text-xs font-weight-bold">80</span>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td class="align-middle">
                            <div class="progress-wrapper w-25 mx-auto">
                                <div class="progress-info">
                                    <div class="progress-percentage">
                                        <span class="text-xs font-weight-bold">80</span>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td class="align-middle">
                            <div class="progress-wrapper w-25 mx-auto">
                                <div class="progress-info">
                                    <div class="progress-percentage">
                                        <span class="text-xs font-weight-bold">80</span>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td class="align-middle">
                            <div class="progress-wrapper w-25 mx-auto">
                                <div class="progress-info">
                                    <div class="progress-percentage">
                                        <span class="text-xs font-weight-bold">80</span>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td class="align-middle">
                            <div class="progress-wrapper w-25 mx-auto">
                                <div class="progress-info">
                                    <div class="progress-percentage">
                                        <span class="text-xs font-weight-bold">80</span>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td class="align-middle">
                            <div class="progress-wrapper w-25 mx-auto">
                                <div class="progress-info">
                                    <div class="progress-percentage">
                                        <span class="text-xs font-weight-bold">80</span>
                                    </div>
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
      <section class="my-4 hideTanimalier mx-3">
        <div class="row">
          <div class="col-lg-12 col-md-9 mb-md-0 mb-4">
            <div class="card">
              <div class="card-header pb-0">
                <div class="row">
                  <div class="col-lg-6 col-7">
                    <h6>Les Ventes de Bétails</h6>
                    <p class="text-sm mb-0">
                      <i class="fa fa-check text-info" aria-hidden="true"></i>
                      <span class="font-weight-bold ms-1">106 bétails vendus✅</span>
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
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">N°</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Reproducteur Male</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Reproducteur Femelle</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Mise Bas</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Evaluation des<br> Reproducteurs</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Evaluation des<br> mises bas</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Evaluation des<br> vache en état</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Evaluation de<br> la mortalité</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Avance reçues</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Dettes</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>
                          <div class="d-flex px-2 py-1">
                            <span>#1</span>
                          </div>
                        </td>
                        <td>
                            <div class="avatar-group mt-2">
                                <h6 class="text-xxs">MANOUTON</h6>
                            </div>
                        </td>
                        <td class="align-middle text-sm">
                          <span class="text-xs font-weight-bold"> 34000</span>
                        </td>
                        <td class="align-middle">
                          <div class="progress-wrapper w-25 mx-auto">
                            <div class="progress-info">
                              <div class="progress-percentage">
                                <span class="text-xs font-weight-bold">60</span>
                              </div>
                            </div>
                          </div>
                        </td>
                        <td class="align-middle">
                            <div class="progress-wrapper w-25 mx-auto">
                                <div class="progress-info">
                                    <div class="progress-percentage">
                                        <span class="text-xs font-weight-bold">80</span>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td class="align-middle">
                            <div class="progress-wrapper w-25 mx-auto">
                                <div class="progress-info">
                                    <div class="progress-percentage">
                                        <span class="text-xs font-weight-bold">80</span>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td class="align-middle">
                            <div class="progress-wrapper w-25 mx-auto">
                                <div class="progress-info">
                                    <div class="progress-percentage">
                                        <span class="text-xs font-weight-bold">80</span>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td class="align-middle">
                            <div class="progress-wrapper w-25 mx-auto">
                                <div class="progress-info">
                                    <div class="progress-percentage">
                                        <span class="text-xs font-weight-bold">80</span>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td class="align-middle">
                            <div class="progress-wrapper w-25 mx-auto">
                                <div class="progress-info">
                                    <div class="progress-percentage">
                                        <span class="text-xs font-weight-bold">80</span>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td class="align-middle">
                            <div class="progress-wrapper w-25 mx-auto">
                                <div class="progress-info">
                                    <div class="progress-percentage">
                                        <span class="text-xs font-weight-bold">80</span>
                                    </div>
                                </div>
                            </div>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="d-flex px-2 py-1">
                            <span>#2</span>
                          </div>
                        </td>
                        <td>
                            <div class="avatar-group mt-2">
                                <h6 class="text-xxs">MANOUTON</h6>
                            </div>
                        </td>
                        <td class="align-middle text-sm">
                          <span class="text-xs font-weight-bold"> 500</span>
                        </td>
                        <td class="align-middle">
                          <div class="progress-wrapper w-25 mx-auto">
                            <div class="progress-info">
                              <div class="progress-percentage">
                                <span class="text-xs font-weight-bold">60</span>
                              </div>
                            </div>
                          </div>
                        </td>
                        <td class="align-middle">
                            <div class="progress-wrapper w-25 mx-auto">
                                <div class="progress-info">
                                    <div class="progress-percentage">
                                        <span class="text-xs font-weight-bold">80</span>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td class="align-middle">
                            <div class="progress-wrapper w-25 mx-auto">
                                <div class="progress-info">
                                    <div class="progress-percentage">
                                        <span class="text-xs font-weight-bold">80</span>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td class="align-middle">
                            <div class="progress-wrapper w-25 mx-auto">
                                <div class="progress-info">
                                    <div class="progress-percentage">
                                        <span class="text-xs font-weight-bold">80</span>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td class="align-middle">
                            <div class="progress-wrapper w-25 mx-auto">
                                <div class="progress-info">
                                    <div class="progress-percentage">
                                        <span class="text-xs font-weight-bold">80</span>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td class="align-middle">
                            <div class="progress-wrapper w-25 mx-auto">
                                <div class="progress-info">
                                    <div class="progress-percentage">
                                        <span class="text-xs font-weight-bold">80</span>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td class="align-middle">
                            <div class="progress-wrapper w-25 mx-auto">
                                <div class="progress-info">
                                    <div class="progress-percentage">
                                        <span class="text-xs font-weight-bold">80</span>
                                    </div>
                                </div>
                            </div>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="d-flex px-2 py-1">
                            <span>#3</span>
                          </div>
                        </td>
                        <td>
                            <div class="avatar-group mt-2">
                                <h6 class="text-xxs">MANOUTON</h6>
                            </div>
                        </td>
                        <td class="align-middle text-sm">
                          <span class="text-xs font-weight-bold"> 8000</span>
                        </td>
                        <td class="align-middle">
                          <div class="progress-wrapper w-25 mx-auto">
                            <div class="progress-info">
                              <div class="progress-percentage">
                                <span class="text-xs font-weight-bold">60</span>
                              </div>
                            </div>
                          </div>
                        </td>
                        <td class="align-middle">
                            <div class="progress-wrapper w-25 mx-auto">
                                <div class="progress-info">
                                    <div class="progress-percentage">
                                        <span class="text-xs font-weight-bold">80</span>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td class="align-middle">
                            <div class="progress-wrapper w-25 mx-auto">
                                <div class="progress-info">
                                    <div class="progress-percentage">
                                        <span class="text-xs font-weight-bold">80</span>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td class="align-middle">
                            <div class="progress-wrapper w-25 mx-auto">
                                <div class="progress-info">
                                    <div class="progress-percentage">
                                        <span class="text-xs font-weight-bold">80</span>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td class="align-middle">
                            <div class="progress-wrapper w-25 mx-auto">
                                <div class="progress-info">
                                    <div class="progress-percentage">
                                        <span class="text-xs font-weight-bold">80</span>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td class="align-middle">
                            <div class="progress-wrapper w-25 mx-auto">
                                <div class="progress-info">
                                    <div class="progress-percentage">
                                        <span class="text-xs font-weight-bold">80</span>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td class="align-middle">
                            <div class="progress-wrapper w-25 mx-auto">
                                <div class="progress-info">
                                    <div class="progress-percentage">
                                        <span class="text-xs font-weight-bold">80</span>
                                    </div>
                                </div>
                            </div>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="d-flex px-2 py-1">
                            <span>#4</span>
                          </div>
                        </td>
                        <td>
                            <div class="avatar-group mt-2">
                                <h6 class="text-xxs">MANOUTON</h6>
                            </div>
                        </td>
                        <td class="align-middle text-sm">
                          <span class="text-xs font-weight-bold"> 3000</span>
                        </td>
                        <td class="align-middle">
                          <div class="progress-wrapper w-25 mx-auto">
                            <div class="progress-info">
                              <div class="progress-percentage">
                                <span class="text-xs font-weight-bold">60</span>
                              </div>
                            </div>
                          </div>
                        </td>
                        <td class="align-middle">
                            <div class="progress-wrapper w-25 mx-auto">
                                <div class="progress-info">
                                    <div class="progress-percentage">
                                        <span class="text-xs font-weight-bold">80</span>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td class="align-middle">
                            <div class="progress-wrapper w-25 mx-auto">
                                <div class="progress-info">
                                    <div class="progress-percentage">
                                        <span class="text-xs font-weight-bold">80</span>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td class="align-middle">
                            <div class="progress-wrapper w-25 mx-auto">
                                <div class="progress-info">
                                    <div class="progress-percentage">
                                        <span class="text-xs font-weight-bold">80</span>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td class="align-middle">
                            <div class="progress-wrapper w-25 mx-auto">
                                <div class="progress-info">
                                    <div class="progress-percentage">
                                        <span class="text-xs font-weight-bold">80</span>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td class="align-middle">
                            <div class="progress-wrapper w-25 mx-auto">
                                <div class="progress-info">
                                    <div class="progress-percentage">
                                        <span class="text-xs font-weight-bold">80</span>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td class="align-middle">
                            <div class="progress-wrapper w-25 mx-auto">
                                <div class="progress-info">
                                    <div class="progress-percentage">
                                        <span class="text-xs font-weight-bold">80</span>
                                    </div>
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
      <section class="my-4 hideTanimalier mx-3">
        <div class="row">
          <div class="col-lg-12 col-md-9 mb-md-0 mb-4">
            <div class="card">
              <div class="card-header pb-0">
                <div class="row">
                  <div class="col-lg-6 col-7">
                    <h6>Les Dépenses éffectuées</h6>
                    <p class="text-sm mb-0">
                      <i class="fa fa-check text-info" aria-hidden="true"></i>
                      <span class="font-weight-bold ms-1">3.500.000 XOF</span> dépensé déjà.
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
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">N°</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Noms</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Taille du cheptel</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Mise Bas</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Prophylaxie</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Fautes réalisées</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">SAnctions reçues</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Salaires payées</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Avance reçues</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Dettes</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>
                          <div class="d-flex px-2 py-1">
                            <span>#1</span>
                          </div>
                        </td>
                        <td>
                            <div class="avatar-group mt-2">
                                <h6 class="text-xxs">MANOUTON</h6>
                            </div>
                        </td>
                        <td class="align-middle text-sm">
                          <span class="text-xs font-weight-bold"> 34000</span>
                        </td>
                        <td class="align-middle">
                          <div class="progress-wrapper w-25 mx-auto">
                            <div class="progress-info">
                              <div class="progress-percentage">
                                <span class="text-xs font-weight-bold">60</span>
                              </div>
                            </div>
                          </div>
                        </td>
                        <td class="align-middle">
                            <div class="progress-wrapper w-25 mx-auto">
                                <div class="progress-info">
                                    <div class="progress-percentage">
                                        <span class="text-xs font-weight-bold">80</span>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td class="align-middle">
                            <div class="progress-wrapper w-25 mx-auto">
                                <div class="progress-info">
                                    <div class="progress-percentage">
                                        <span class="text-xs font-weight-bold">80</span>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td class="align-middle">
                            <div class="progress-wrapper w-25 mx-auto">
                                <div class="progress-info">
                                    <div class="progress-percentage">
                                        <span class="text-xs font-weight-bold">80</span>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td class="align-middle">
                            <div class="progress-wrapper w-25 mx-auto">
                                <div class="progress-info">
                                    <div class="progress-percentage">
                                        <span class="text-xs font-weight-bold">80</span>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td class="align-middle">
                            <div class="progress-wrapper w-25 mx-auto">
                                <div class="progress-info">
                                    <div class="progress-percentage">
                                        <span class="text-xs font-weight-bold">80</span>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td class="align-middle">
                            <div class="progress-wrapper w-25 mx-auto">
                                <div class="progress-info">
                                    <div class="progress-percentage">
                                        <span class="text-xs font-weight-bold">80</span>
                                    </div>
                                </div>
                            </div>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="d-flex px-2 py-1">
                            <span>#2</span>
                          </div>
                        </td>
                        <td>
                            <div class="avatar-group mt-2">
                                <h6 class="text-xxs">MANOUTON</h6>
                            </div>
                        </td>
                        <td class="align-middle text-sm">
                          <span class="text-xs font-weight-bold"> 500</span>
                        </td>
                        <td class="align-middle">
                          <div class="progress-wrapper w-25 mx-auto">
                            <div class="progress-info">
                              <div class="progress-percentage">
                                <span class="text-xs font-weight-bold">60</span>
                              </div>
                            </div>
                          </div>
                        </td>
                        <td class="align-middle">
                            <div class="progress-wrapper w-25 mx-auto">
                                <div class="progress-info">
                                    <div class="progress-percentage">
                                        <span class="text-xs font-weight-bold">80</span>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td class="align-middle">
                            <div class="progress-wrapper w-25 mx-auto">
                                <div class="progress-info">
                                    <div class="progress-percentage">
                                        <span class="text-xs font-weight-bold">80</span>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td class="align-middle">
                            <div class="progress-wrapper w-25 mx-auto">
                                <div class="progress-info">
                                    <div class="progress-percentage">
                                        <span class="text-xs font-weight-bold">80</span>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td class="align-middle">
                            <div class="progress-wrapper w-25 mx-auto">
                                <div class="progress-info">
                                    <div class="progress-percentage">
                                        <span class="text-xs font-weight-bold">80</span>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td class="align-middle">
                            <div class="progress-wrapper w-25 mx-auto">
                                <div class="progress-info">
                                    <div class="progress-percentage">
                                        <span class="text-xs font-weight-bold">80</span>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td class="align-middle">
                            <div class="progress-wrapper w-25 mx-auto">
                                <div class="progress-info">
                                    <div class="progress-percentage">
                                        <span class="text-xs font-weight-bold">80</span>
                                    </div>
                                </div>
                            </div>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="d-flex px-2 py-1">
                            <span>#3</span>
                          </div>
                        </td>
                        <td>
                            <div class="avatar-group mt-2">
                                <h6 class="text-xxs">MANOUTON</h6>
                            </div>
                        </td>
                        <td class="align-middle text-sm">
                          <span class="text-xs font-weight-bold"> 8000</span>
                        </td>
                        <td class="align-middle">
                          <div class="progress-wrapper w-25 mx-auto">
                            <div class="progress-info">
                              <div class="progress-percentage">
                                <span class="text-xs font-weight-bold">60</span>
                              </div>
                            </div>
                          </div>
                        </td>
                        <td class="align-middle">
                            <div class="progress-wrapper w-25 mx-auto">
                                <div class="progress-info">
                                    <div class="progress-percentage">
                                        <span class="text-xs font-weight-bold">80</span>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td class="align-middle">
                            <div class="progress-wrapper w-25 mx-auto">
                                <div class="progress-info">
                                    <div class="progress-percentage">
                                        <span class="text-xs font-weight-bold">80</span>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td class="align-middle">
                            <div class="progress-wrapper w-25 mx-auto">
                                <div class="progress-info">
                                    <div class="progress-percentage">
                                        <span class="text-xs font-weight-bold">80</span>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td class="align-middle">
                            <div class="progress-wrapper w-25 mx-auto">
                                <div class="progress-info">
                                    <div class="progress-percentage">
                                        <span class="text-xs font-weight-bold">80</span>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td class="align-middle">
                            <div class="progress-wrapper w-25 mx-auto">
                                <div class="progress-info">
                                    <div class="progress-percentage">
                                        <span class="text-xs font-weight-bold">80</span>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td class="align-middle">
                            <div class="progress-wrapper w-25 mx-auto">
                                <div class="progress-info">
                                    <div class="progress-percentage">
                                        <span class="text-xs font-weight-bold">80</span>
                                    </div>
                                </div>
                            </div>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="d-flex px-2 py-1">
                            <span>#4</span>
                          </div>
                        </td>
                        <td>
                            <div class="avatar-group mt-2">
                                <h6 class="text-xxs">MANOUTON</h6>
                            </div>
                        </td>
                        <td class="align-middle text-sm">
                          <span class="text-xs font-weight-bold"> 3000</span>
                        </td>
                        <td class="align-middle">
                          <div class="progress-wrapper w-25 mx-auto">
                            <div class="progress-info">
                              <div class="progress-percentage">
                                <span class="text-xs font-weight-bold">60</span>
                              </div>
                            </div>
                          </div>
                        </td>
                        <td class="align-middle">
                            <div class="progress-wrapper w-25 mx-auto">
                                <div class="progress-info">
                                    <div class="progress-percentage">
                                        <span class="text-xs font-weight-bold">80</span>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td class="align-middle">
                            <div class="progress-wrapper w-25 mx-auto">
                                <div class="progress-info">
                                    <div class="progress-percentage">
                                        <span class="text-xs font-weight-bold">80</span>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td class="align-middle">
                            <div class="progress-wrapper w-25 mx-auto">
                                <div class="progress-info">
                                    <div class="progress-percentage">
                                        <span class="text-xs font-weight-bold">80</span>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td class="align-middle">
                            <div class="progress-wrapper w-25 mx-auto">
                                <div class="progress-info">
                                    <div class="progress-percentage">
                                        <span class="text-xs font-weight-bold">80</span>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td class="align-middle">
                            <div class="progress-wrapper w-25 mx-auto">
                                <div class="progress-info">
                                    <div class="progress-percentage">
                                        <span class="text-xs font-weight-bold">80</span>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td class="align-middle">
                            <div class="progress-wrapper w-25 mx-auto">
                                <div class="progress-info">
                                    <div class="progress-percentage">
                                        <span class="text-xs font-weight-bold">80</span>
                                    </div>
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
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">N°</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Noms</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Taille du cheptel</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Mise Bas</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Prophylaxie</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Fautes réalisées</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">SAnctions reçues</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Salaires payées</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Avance reçues</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Dettes</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>
                          <div class="d-flex px-2 py-1">
                            <span>#1</span>
                          </div>
                        </td>
                        <td>
                            <div class="avatar-group mt-2">
                                <h6 class="text-xxs">MANOUTON</h6>
                            </div>
                        </td>
                        <td class="align-middle text-sm">
                          <span class="text-xs font-weight-bold"> 34000</span>
                        </td>
                        <td class="align-middle">
                          <div class="progress-wrapper w-25 mx-auto">
                            <div class="progress-info">
                              <div class="progress-percentage">
                                <span class="text-xs font-weight-bold">60</span>
                              </div>
                            </div>
                          </div>
                        </td>
                        <td class="align-middle">
                            <div class="progress-wrapper w-25 mx-auto">
                                <div class="progress-info">
                                    <div class="progress-percentage">
                                        <span class="text-xs font-weight-bold">80</span>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td class="align-middle">
                            <div class="progress-wrapper w-25 mx-auto">
                                <div class="progress-info">
                                    <div class="progress-percentage">
                                        <span class="text-xs font-weight-bold">80</span>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td class="align-middle">
                            <div class="progress-wrapper w-25 mx-auto">
                                <div class="progress-info">
                                    <div class="progress-percentage">
                                        <span class="text-xs font-weight-bold">80</span>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td class="align-middle">
                            <div class="progress-wrapper w-25 mx-auto">
                                <div class="progress-info">
                                    <div class="progress-percentage">
                                        <span class="text-xs font-weight-bold">80</span>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td class="align-middle">
                            <div class="progress-wrapper w-25 mx-auto">
                                <div class="progress-info">
                                    <div class="progress-percentage">
                                        <span class="text-xs font-weight-bold">80</span>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td class="align-middle">
                            <div class="progress-wrapper w-25 mx-auto">
                                <div class="progress-info">
                                    <div class="progress-percentage">
                                        <span class="text-xs font-weight-bold">80</span>
                                    </div>
                                </div>
                            </div>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="d-flex px-2 py-1">
                            <span>#2</span>
                          </div>
                        </td>
                        <td>
                            <div class="avatar-group mt-2">
                                <h6 class="text-xxs">MANOUTON</h6>
                            </div>
                        </td>
                        <td class="align-middle text-sm">
                          <span class="text-xs font-weight-bold"> 500</span>
                        </td>
                        <td class="align-middle">
                          <div class="progress-wrapper w-25 mx-auto">
                            <div class="progress-info">
                              <div class="progress-percentage">
                                <span class="text-xs font-weight-bold">60</span>
                              </div>
                            </div>
                          </div>
                        </td>
                        <td class="align-middle">
                            <div class="progress-wrapper w-25 mx-auto">
                                <div class="progress-info">
                                    <div class="progress-percentage">
                                        <span class="text-xs font-weight-bold">80</span>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td class="align-middle">
                            <div class="progress-wrapper w-25 mx-auto">
                                <div class="progress-info">
                                    <div class="progress-percentage">
                                        <span class="text-xs font-weight-bold">80</span>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td class="align-middle">
                            <div class="progress-wrapper w-25 mx-auto">
                                <div class="progress-info">
                                    <div class="progress-percentage">
                                        <span class="text-xs font-weight-bold">80</span>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td class="align-middle">
                            <div class="progress-wrapper w-25 mx-auto">
                                <div class="progress-info">
                                    <div class="progress-percentage">
                                        <span class="text-xs font-weight-bold">80</span>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td class="align-middle">
                            <div class="progress-wrapper w-25 mx-auto">
                                <div class="progress-info">
                                    <div class="progress-percentage">
                                        <span class="text-xs font-weight-bold">80</span>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td class="align-middle">
                            <div class="progress-wrapper w-25 mx-auto">
                                <div class="progress-info">
                                    <div class="progress-percentage">
                                        <span class="text-xs font-weight-bold">80</span>
                                    </div>
                                </div>
                            </div>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="d-flex px-2 py-1">
                            <span>#3</span>
                          </div>
                        </td>
                        <td>
                            <div class="avatar-group mt-2">
                                <h6 class="text-xxs">MANOUTON</h6>
                            </div>
                        </td>
                        <td class="align-middle text-sm">
                          <span class="text-xs font-weight-bold"> 8000</span>
                        </td>
                        <td class="align-middle">
                          <div class="progress-wrapper w-25 mx-auto">
                            <div class="progress-info">
                              <div class="progress-percentage">
                                <span class="text-xs font-weight-bold">60</span>
                              </div>
                            </div>
                          </div>
                        </td>
                        <td class="align-middle">
                            <div class="progress-wrapper w-25 mx-auto">
                                <div class="progress-info">
                                    <div class="progress-percentage">
                                        <span class="text-xs font-weight-bold">80</span>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td class="align-middle">
                            <div class="progress-wrapper w-25 mx-auto">
                                <div class="progress-info">
                                    <div class="progress-percentage">
                                        <span class="text-xs font-weight-bold">80</span>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td class="align-middle">
                            <div class="progress-wrapper w-25 mx-auto">
                                <div class="progress-info">
                                    <div class="progress-percentage">
                                        <span class="text-xs font-weight-bold">80</span>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td class="align-middle">
                            <div class="progress-wrapper w-25 mx-auto">
                                <div class="progress-info">
                                    <div class="progress-percentage">
                                        <span class="text-xs font-weight-bold">80</span>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td class="align-middle">
                            <div class="progress-wrapper w-25 mx-auto">
                                <div class="progress-info">
                                    <div class="progress-percentage">
                                        <span class="text-xs font-weight-bold">80</span>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td class="align-middle">
                            <div class="progress-wrapper w-25 mx-auto">
                                <div class="progress-info">
                                    <div class="progress-percentage">
                                        <span class="text-xs font-weight-bold">80</span>
                                    </div>
                                </div>
                            </div>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="d-flex px-2 py-1">
                            <span>#4</span>
                          </div>
                        </td>
                        <td>
                            <div class="avatar-group mt-2">
                                <h6 class="text-xxs">MANOUTON</h6>
                            </div>
                        </td>
                        <td class="align-middle text-sm">
                          <span class="text-xs font-weight-bold"> 3000</span>
                        </td>
                        <td class="align-middle">
                          <div class="progress-wrapper w-25 mx-auto">
                            <div class="progress-info">
                              <div class="progress-percentage">
                                <span class="text-xs font-weight-bold">60</span>
                              </div>
                            </div>
                          </div>
                        </td>
                        <td class="align-middle">
                            <div class="progress-wrapper w-25 mx-auto">
                                <div class="progress-info">
                                    <div class="progress-percentage">
                                        <span class="text-xs font-weight-bold">80</span>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td class="align-middle">
                            <div class="progress-wrapper w-25 mx-auto">
                                <div class="progress-info">
                                    <div class="progress-percentage">
                                        <span class="text-xs font-weight-bold">80</span>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td class="align-middle">
                            <div class="progress-wrapper w-25 mx-auto">
                                <div class="progress-info">
                                    <div class="progress-percentage">
                                        <span class="text-xs font-weight-bold">80</span>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td class="align-middle">
                            <div class="progress-wrapper w-25 mx-auto">
                                <div class="progress-info">
                                    <div class="progress-percentage">
                                        <span class="text-xs font-weight-bold">80</span>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td class="align-middle">
                            <div class="progress-wrapper w-25 mx-auto">
                                <div class="progress-info">
                                    <div class="progress-percentage">
                                        <span class="text-xs font-weight-bold">80</span>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td class="align-middle">
                            <div class="progress-wrapper w-25 mx-auto">
                                <div class="progress-info">
                                    <div class="progress-percentage">
                                        <span class="text-xs font-weight-bold">80</span>
                                    </div>
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