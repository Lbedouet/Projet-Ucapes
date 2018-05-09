<?php
    $utilisateur = "root";
    $motdepasse = "";
    $nomBD = "projet_ucape";
    $connexion = new \PDO("mysql:host=127.0.0.1;dbname=$nomBD", $utilisateur, $motdepasse);
?>