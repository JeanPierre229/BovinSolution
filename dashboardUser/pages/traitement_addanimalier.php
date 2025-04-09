<?php
    session_start();
    $nom = $region = $experience = $domicile = $identite_image = $identite_image_ext = $identite_image_path = $upload = null;
    $imageErreur = null;
    $_SESSION['successadd'] = null;


    if(!empty($_POST) && isset($_POST)){
        $nom = checkData($_POST['nom']);
        $region = checkData($_POST['region']);
        $experience = checkData($_POST['experience']);
        $domicile = checkData($_POST['domicile']);
        $identite_image = checkData($_FILES["identite_file"]["name"]);
        $identite_image_path = '../assets/images/' . basename($identite_image);
        $identite_image_ext = pathinfo($identite_image_path, PATHINFO_EXTENSION);
        $upload = false;

        if($identite_image){
            $upload = true;
            if($identite_image_ext != 'jpg' && $identite_image_ext != 'png' && $identite_image_ext != 'jpeg' && $identite_image_ext != 'gif'){
                $imageErreur = "Le fichier doit être sous l'un de ces formats: .jpg, .png, .jpeg, et .gif";
                $upload = false;
            }
            if(file_exists($identite_image_path)){
                $imageErreur = "Cette image existe déjà !";
                $upload = false;
            }
            if($_FILES["identite_file"]["size"] > 500000){
                $imageErreur = "Le fichier ne doit pas dépasser 500kb";
                $upload = false;
            }
            $apostrophe = "'";
            $slash = "/";
            $antislash = "\\";
            $deuxp = ":";
            $co = "<";
            $cf = ">";
            if(
                (strpos($identite_image, $apostrophe) !== false) || (strpos($identite_image, $slash) !== false) ||
                (strpos($identite_image, $antislash) !== false) || (strpos($identite_image, $deuxp) !== false) ||
                (strpos($identite_image, $co) !== false) || (strpos($identite_image, $cf) !== false)
                ){
                $imageErreur = "Le nom du fichier ne doit pas contenir ces caractères: <strong>/, \, ', :, < et ></strong>";
                $upload = false;
            }
            if($upload){
                if(!move_uploaded_file($_FILES["identite_file"]["tmp_name"], $identite_image_path)){
                    $imageErreur = "Erreur lors du chargement du fichier";
                    $upload = false;
                }
            }
    
            if($upload){
                require '../../connectDB.php';
                $connect = DataBase::connect();
                $requete = $connect->prepare("INSERT INTO all_animalier(nom, region, experience, domicile, identite)
                VALUES(:nom, :region, :experience, :domicile, :identite)");
                $requete->execute([
                    'nom' => $nom,
                    'region' => $region,
                    'experience' => $experience,
                    'domicile' => $domicile,
                    'identite' => $identite_image,
                ]);
                $_SESSION['successadd'] = "L'animalier a bien été enregistré.";
                header('Location: bs_animalierm.php#addA');
            }
        }
    }

    function checkData($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
?>


<!-- Echantillon de code à utiliser et jeter après usage -->
<?php
    // session_start();
    // function check( $donnee ){
    //     $donnee = trim($donnee);
    //     $donnee = stripslashes($donnee);
    //     $donnee = htmlspecialchars($donnee);
    //     return $donnee;
    // }
    // $imageErreur = null;
    // $nameErreur = null;
    // if(!empty($_POST) && isset($_POST)){
    //     $nom = check($_POST["nom"]);
    //     $message = check($_POST["message_temoin"]);
    //     $image = check($_FILES["image"]["name"]);
    //     $image_path = 'assets/images/' . basename($image);
    //     $image_ext = pathinfo($image_path, PATHINFO_EXTENSION);
    //     $date = new DateTime();
    //     $date = $date->format('Y-m-d');
    //     $upload = false;
    //     $np = $_SESSION['nom']. ' ' .$_SESSION['prenom'];
    //     $pn = $_SESSION['prenom']. ' ' .$_SESSION['nom'];

    //     if(($np != $nom) && ($pn != $nom)){
    //         $nameErreur = "Votre identité est incorrect !";
    //     }else{
    //         if($image){
    //             $upload = true;
    //             if($image_ext != 'jpg' && $image_ext != 'png' && $image_ext != 'jpeg' && $image_ext != 'gif'){
    //                 $imageErreur = "Le fichier doit être sous l'un de ces formats: .jpg, .png, .jpeg, et .gif";
    //                 $upload = false;
    //             }
    //             if(file_exists($image_path)){
    //                 $imageErreur = "Cette image existe déjà !";
    //                 $upload = false;
    //             }
    //             if($_FILES["image"]["size"] > 500000){
    //                 $imageErreur = "Le fichier ne doit pas dépasser 500kb";
    //                 $upload = false;
    //             }
    //             $apostrophe = "'";
    //             $slash = "/";
    //             $antislash = "\\";
    //             $deuxp = ":";
    //             $co = "<";
    //             $cf = ">";
    //             if(
    //                 (strpos($image, $apostrophe) !== false) || (strpos($image, $slash) !== false) ||
    //                 (strpos($image, $antislash) !== false) || (strpos($image, $deuxp) !== false) ||
    //                 (strpos($image, $co) !== false) || (strpos($image, $cf) !== false)
    //                 ){
    //                 $imageErreur = "Le nom du fichier ne doit pas contenir ces caractères: <strong>/, \, ', :, < et ></strong>";
    //                 $upload = false;
    //             }
    //             if($upload){
    //                 if(!move_uploaded_file($_FILES["image"]["tmp_name"], $image_path)){
    //                     $imageErreur = "Erreur lors du chargement du fichier";
    //                     $upload = false;
    //                 }
    //             }
        
    //             if($upload){
    //                 $connect = new PDO("mysql: host=localhost; dbname=id21990320_doc_formation","root","");
    //                 $requete = $connect->query("
    //                                             INSERT INTO temoignage(nom_temoin, message_temoin, date, image)
    //                                             VALUES('$nom','$message','$date','$image')
    //                                            ");
    //                 header("Location: index.php#temoin");
    //             }
    //         }
    //     }
    // }
?>