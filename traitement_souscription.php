<?php
    session_start();
    $mail_newsletter = $_SESSION['error_format'] = $_SESSION['succes_format'] = null;
    $exist = false;

    if(!empty($_POST) && isset($_POST)){
        if(filter_var($_POST['mail_newsletter'], FILTER_VALIDATE_EMAIL)){
            $mail_newsletter = checkData($_POST['mail_newsletter']);
            require "connectDB.php";
            $connect = DataBase::connect();

            // Vérifier que l'adresse mail n'est pas encore existant
            $requete = $connect->prepare("SELECT * FROM newsletter WHERE mail_newsletter = :mail;");
            $requete->execute([':mail' => $mail_newsletter]);
            
            while($result = $requete->fetch()){
                if($result['mail_newsletter'] == $mail_newsletter){
                    $exist = true;
                }else{
                    $exist = false;
                }
            }
            if(!$exist){
                $requete1 = $connect->prepare("INSERT INTO newsletter(mail_newsletter) VALUES(:mail);");
                $requete1->execute([':mail' => $mail_newsletter]);
                $_SESSION['succes_format'] = "E-mail enregistré avec succès !";
            }else{
                $_SESSION['error_format'] = "Cette adresse e-mail est déjà enregistrée";
            }
            header("Location: index.php#footer");
        }else{
            $_SESSION['error_format'] = "Format de mail invalide";
            header("Location: index.php#footer");
        }
    }

    function checkData($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
?>