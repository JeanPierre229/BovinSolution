<?php
    session_start();
    // $_SESSION['error_mail'] = $_SESSION['error_mp'] = null;
    $_SESSION['success'] = null;
    $_SESSION['region'] = $_SESSION['type_betails'] = $_SESSION['type_age'] = $_SESSION['budget'] = null;

    $region = $type_betails = $type_age = $budget = $assistance = $recommandation = null;

    if(!empty($_POST) && isset($_POST)){
        $region = checkData($_POST['region']);
        $type_betails = checkData($_POST['type_betails']);
        $type_age = checkData($_POST['type_age']);
        $budget = checkData($_POST['budget']);
        $assistance = checkData($_POST['assistance']);
        $recommandation = checkData($_POST['recommandation']);

        // Envoi des données dans la base de données "demande_animalier"
        require "connectDB.php";
        $connect = DataBase::connect();
        
        $nom = $_SESSION['nom'];
        // Préparation de la requête pour éviter les injections SQL
        // Utilisation de la table mesDemandesA ici
        $requete = $connect->prepare("
            INSERT INTO mesdemandesa_$nom(region, type_betails, type_age, budget, assistance, recommandation)
            VALUES(:region, :type_betails, :type_age, :budget, :assistance, :recommandation)
        ");
        
        // Exécution de la requête avec des paramètres sécurisés
        $requete->execute([
            ':region' => $region,
            ':type_betails' => $type_betails,
            ':type_age' => $type_age,
            ':budget' => $budget,
            ':assistance' => $assistance,
            ':recommandation' => $recommandation
        ]);

        header("Location: info-animalier.php#form-demand");

        $_SESSION['success'] = "Demande enregistrée avec succès";
    }else{
        header("Location: ../about.php");
    }

    function checkData($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlentities($data);
        return $data;
    }
?>
