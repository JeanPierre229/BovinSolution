<?php
    require '../../connectDB.php';
    $connect = DataBase::connect();
    $requete = $connect->prepare("SELECT * FROM all_animalier;");
    $requete->execute();
    if(!empty($_GET['deleteid'])){
        $deleteid = $_GET['deleteid'];
        $table = "all_animalier";
        $requete1 = $connect->prepare("DELETE FROM $table WHERE id = $deleteid;");
        $requete1->execute();
        header("Location: bs_animalierm.php");
    }

    if ($requete->rowCount() > 0) {
?>
        <table class="table align-items-center mb-0">
        <thead>
            <tr>
            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">N°</th>
            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-0 ms-0">Noms</th>
            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Région</th>
            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Expérience</th>
            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Domicile</th>
            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Identité</th>
            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Retirer</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($donnees = $requete->fetch()) { ?>
                <tr>
                    <td>
                        <div class="d-flex px-2 py-1">
                        <span># <?= $donnees['id'] ?></span>
                        </div>
                    </td>
                    <td class="align-middle">
                        <div class="avatar-group mt-2">
                            <h6 class="text-xxs"> <?= $donnees['nom'] ?></h6>
                        </div>
                    </td>
                    <td class="align-middle text-sm">
                        <span class="text-xs font-weight-bold"> <?= $donnees['region'] ?></span>
                    </td>
                    <td class="align-middle text-center">
                        <div class="progress-wrapper w-25 mx-auto">
                        <div class="progress-info">
                            <div class="progress-percentage">
                            <span class="text-xs font-weight-bold"> <?= $donnees['experience'] ?></span>
                            </div>
                        </div>
                        </div>
                    </td>
                    <td class="align-middle text-center">
                        <div class="progress-wrapper w-25 mx-auto">
                            <div class="progress-info">
                                <div class="progress-percentage">
                                    <span class="text-xs font-weight-bold"> <?= $donnees['domicile'] ?></span>
                                </div>
                            </div>
                        </div>
                    </td>
                    <td class="align-middle text-center">
                        <div class="progress-wrapper mx-end">
                            <div class="">
                                <div class="">
                                    <img src="../assets/images/<?= $donnees['identite'] ?>" class="m-0 p-0" style="width: 30px;" alt="Image_Identite">
                                </div>
                            </div>
                        </div>
                    </td>
                    <td class="align-middle text-center">
                        <div class="progress-wrapper mx-end">
                            <div class="">
                                <div class="">
                                    <a href="actualiser_donnee.php?deleteid=<?= $donnees['id'] ?>">
                                        <i class="fa fa-close" style="font-size: 19px; color: black;"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
        </table>
    </div>
    </div>
<?php } ?>
