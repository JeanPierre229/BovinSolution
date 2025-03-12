<?php
    session_start();
    $nom = $region = $experience = $domicile = $identite = null;
    $_SESSION['successadd'] = null;


    if(!empty($_POST) && isset($_POST)){
        $nom = checkData($_POST['nom']);
        $region = checkData($_POST['region']);
        $experience = checkData($_POST['experience']);
        $domicile = checkData($_POST['domicile']);
        $identite = checkData($_POST['identite']);

        require '../../connectDB.php';
        $connect = DataBase::connect();
        $requete = $connect->prepare("INSERT INTO all_animalier(nom, region, experience, domicile, identite)
        VALUES(:nom, :region, :experience, :domicile, :identite)");
        $requete->execute([
            'nom' => $nom,
           'region' => $region,
            'experience' => $experience,
            'domicile' => $domicile,
            'identite' => $identite,
        ]);
        $_SESSION['successadd'] = "L'animalier a bien été enregistré.";
        header('Location: bs_animalierm.php#addA');
    }

    function checkData($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
?>