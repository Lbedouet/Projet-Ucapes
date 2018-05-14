<?php
    require_once 'includes/db.php';

    if (!empty($_POST) && isset($_POST['connexion'])) {
        if (!empty($_POST['identifiant']) && !empty($_POST['motdepasse'])) {

            $req = $connexion->prepare('SELECT * FROM utilisateur WHERE identifiant = :identifiant AND motDePasse = :mot_de_passe');
            $req->bindParam(':identifiant', $_POST['identifiant']);
            $req->bindParam(':mot_de_passe', $_POST['motdepasse']);

            try {
                $req->execute();
                $resultats = $req->fetch();

                if ($resultats) {

                    $_SESSION['utilisateur'] = [
                        'identifiant' => $resultats['identifiant'],
                        'id' => $resultats['id'],
                        'admin' => $resultats['statutAdmin']
                    ];

                    header('Location: index.php');
                }

                echo '<p class="error">Vous vous êtes trompé dans votre identifiant ou votre mot de passe, ou bien votre compte n\'existe pas.</p>';
            } catch (\Exception $exception) {
                echo '<p class="error">Oups une erreur s\'est produite';
                echo $exception->getMessage().'</p>';
            }
        } else {
            $IdErreur = '<span style="color: red; font-size: 12px;">Veuillez remplir votre email.</span>';
            echo '<p>Oups une erreur s\'est produite durant la connexion ! </p>';
            echo '<p>Veuillez remplir tous les champs.</p>';
        }
    }
?>