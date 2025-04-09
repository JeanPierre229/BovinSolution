<?php
    session_start();

    $nom = $_SESSION['nom'];
    echo $nom;
    $nom = $nom.lowercase();
    echo $nom;

?>