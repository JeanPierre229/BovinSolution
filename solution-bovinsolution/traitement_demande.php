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
        
        // Préparation de la requête pour éviter les injections SQL
        $requete = $connect->prepare("
            INSERT INTO demande_animalier(region, type_betails, type_age, budget, assistance, recommandation)
            VALUES(:region, :type_betails, :type_age, :budget, :assistance, :recommendation)
        ");
        
        // Exécution de la requête avec des paramètres sécurisés
        $requete->execute([
            ':region' => $region,
            ':type_betails' => $type_betails,
            ':type_age' => $type_age,
            ':budget' => $budget,
            ':assistance' => $assistance,
            ':recommendation' => $recommandation
        ]);

        header("Location: info-animalier.php#form-demand");

        $_SESSION['success'] = "Demande enregistrée avec succès";

        // Vérification du mail
        // if(filter_var($mail, FILTER_VALIDATE_EMAIL)){
        //     // Vérification du mot de passe
        //     if($motDePasse1 == $motDePasse2){
        //         $motDePasse = $motDePasse1; // Assignation du mot de passe
        //         require "connectDB.php";
        //         $connect = DataBase::connect();
                
        //         // Préparation de la requête pour éviter les injections SQL
        //         $requete = $connect->prepare("
        //             INSERT INTO demande_animalier(region, type_betails, type_age, budget, assistance, recommandation)
        //             VALUES(:region, :type_betails, :type_age, :budget, :assistance, :recommendation)
        //         ");
                
        //         // Exécution de la requête avec des paramètres sécurisés
        //         $requete->execute([
        //             ':region' => $region,
        //             ':type_betails' => $type_betails,
        //             ':type_age' => $type_age,
        //             ':budget' => $budget,
        //             ':assistance' => $assistance,
        //             ':recommendation' => $recommandation
        //         ]);

        //         header("Location: ../dashboardUser/pages/dashboard.php");
        //     }else{
        //         $_SESSION['error_mp'] = "Erreur, mot de passe non identique";
        //         header("Location: inscription.php");
        //         $_SESSION['region'] = $region;
        //         $_SESSION['type_betails'] = $type_betails;
        //         $_SESSION['type_age'] = $type_age;
        //         $_SESSION['budget'] = $budget;
        //     }
        // }else{
        //     $_SESSION['error_mail'] = "Erreur, format de mail incorrect";
        //     header("Location: info-animalier.php");
        // }
    }

    function checkData($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlentities($data);
        return $data;
    }
?>
