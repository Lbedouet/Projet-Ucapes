<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script type="text/javascript" src="js/jquery.min.js"></script>

    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap.css">

    <script type="text/javascript" src="js/scripts.js"></script>

    <link rel="stylesheet" href="css/style.css">
    <title>Projet Ucape</title>
    
    <!-- mettre si compte admin ou compte éléve dans le header -->
</head>

<body>
    <div class="container">
        <header>
            <h1>Ucape - Section</h1>

            <?php
                if (isset($_SESSION['utilisateur'])) { 
                    echo '<p class="utilisateurConnect">Connecté en tant que <strong>';

                    echo $_SESSION['utilisateur']['identifiant'];

                    if ($_SESSION['utilisateur']['admin'] == 1){
                        echo '</strong> (administrateur) ';
                    }
                    else{
                        echo '</strong> (étudiant) ';
                    }
                    echo ' <br><a href="logout.php">Déconnexion</a></p>';
                } 
                else { 
                    echo '<p class="utilisateurConnect">Bonjour visiteur</p>';
                } 
            ?>
        </header>