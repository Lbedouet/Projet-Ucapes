<?php
    require_once 'includes/db.php';

    if (!empty($_POST) && isset($_POST['connection'])) {
        if (!empty($_POST['identifiant']) && !empty($_POST['motdepasse'])) {

            $req = $connexion->prepare('SELECT * FROM utilisateur WHERE identifiant = :identifiant AND mot_de_passe = :mot_de_passe');
            $req->bindParam(':identifiant', $_POST['identifiant']);
            $passwordCrypted = sha1($_POST['motdepasse']);
            $req->bindParam(':mot_de_passe', $passwordCrypted);

            try {
                $req->execute();
                $resultats = $req->fetch();

                if ($resultats) {

                    $_SESSION['utilisateur'] = [
                        'identifiant' => $resultats['identifiant'],
                        'id' => $resultats['id'],
                    ];

                    header('Location: index.php');
                }

                echo '<p>Désolé vous n\'avez pas été trouvé dans la BDD</p>';
            } catch (\Exception $exception) {
                echo '<p>Oups une erreur s\'est produite</p>';
                echo '<p>'.$exception->getMessage().'</p>';
            }
        } else {
            $IdErreur = '<span style="color: red; font-size: 12px;">Veuillez remplir votre email.</span>';
            echo '<p>Oups une erreur s\'est produite durant la connexion ! </p>';
            echo '<p>Veuillez remplir tous les champs.</p>';
        }
    }
?>