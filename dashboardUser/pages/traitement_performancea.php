<?php
    session_start();
    $nom = $taille = $mise_bas = $prophilaxie = $fautes = $sanctions = $salaires = $avances = $dettes = null;
    $_SESSION['errorperf'] = $_SESSION['successperf'] = null;
    $name = $_SESSION['nom'];

    if(!empty($_POST) && isset($_POST)){
        $nom = checkData($_POST['nom']);
        $taille = checkData($_POST['taille']);
        $mise_bas = checkData($_POST['mise_bas']);
        $prophilaxie = checkData($_POST['prophilaxie']);
        $fautes = checkData($_POST['fautes']);
        $sanctions = checkData($_POST['sanctions']);
        $salaires = checkData($_POST['salaires']);
        $avances = checkData($_POST['avances']);
        $dettes = checkData($_POST['dettes']);

        require '../../connectDB.php';
        $connect = DataBase::connect();
        $name = 'john';
        $tablename = 'performance_animalier_'.$name;
        $requete = $connect->prepare("INSERT INTO $tablename(nom, taille, mise_bas, prophilaxie, fautes, sanctions, salaires, avances, dettes)
        VALUES(:nom, :taille, :mise_bas, :prophilaxie, :fautes, :sanctions, :salaires, :avances, :dettes)");
        $requete->execute([
            'nom' => $nom,
            'taille' => $taille,
            'mise_bas' => $mise_bas,
            'prophilaxie' => $prophilaxie,
            'fautes' => $fautes,
            'sanctions' => $sanctions,
            'salaires' => $salaires,
            'avances' => $avances,
            'dettes' => $dettes
        ]);
        $_SESSION['successperf'] = "Les informations de l'animalier ont bien été enregistrées.";
        header('Location: bs_animalierm.php#addIA');
        
    }

    function checkData($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
?>