<?php
    session_start();
    $_SESSION['error_mail'] = $_SESSION['error_mp'] = null;
    $_SESSION['nom'] = $_SESSION['prenoms'] = $_SESSION['categories'] = $_SESSION['mail'] = null;

    $nom = $prenoms = $categories = $mail = $motDePasse1 = $motDePasse2 = $motDePasse = $success = null;

    if(!empty($_POST) && isset($_POST)){
        $nom = checkData($_POST['nom']);
        $prenoms = checkData($_POST['prenoms']);
        $categories = checkData($_POST['categories']);
        $mail = checkData($_POST['mail']);
        $motDePasse1 = sha1(checkData($_POST['motDePasse']));
        $motDePasse2 = sha1(checkData($_POST['cmotDePasse']));

        // Vérification du mail
        if(filter_var($mail, FILTER_VALIDATE_EMAIL)){
            // Vérification du mot de passe
            if($motDePasse1 == $motDePasse2){
                $motDePasse = $motDePasse1; // Assignation du mot de passe
                require "connectDB.php";
                $connect = DataBase::connect();
                
                // Préparation de la requête pour éviter les injections SQL
                $requete = $connect->prepare("
                    INSERT INTO utilisateurs(nom, prenoms, categories, mail, motDePasse)
                    VALUES(:nom, :prenoms, :categories, :mail, :motDePasse)
                ");
                
                // Exécution de la requête avec des paramètres sécurisés
                $requete->execute([
                    ':nom' => $nom,
                    ':prenoms' => $prenoms,
                    ':categories' => $categories,
                    ':mail' => $mail,
                    ':motDePasse' => $motDePasse
                ]);

                header("Location: connexion.php");
            }else{
                $_SESSION['error_mp'] = "Erreur, mot de passe non identique";
                header("Location: inscription.php");
                $_SESSION['nom'] = $nom;
                $_SESSION['prenoms'] = $prenoms;
                $_SESSION['categories'] = $categories;
                $_SESSION['mail'] = $mail;
            }
        }else{
            $_SESSION['error_mail'] = "Erreur, format de mail incorrect";
            header("Location: inscription.php");
        }
    }

    function checkData($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlentities($data);
        return $data;
    }
?>
