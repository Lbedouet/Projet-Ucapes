<?php
require_once 'includes/session_start.php';
require_once 'includes/db.php' ;
require_once 'includes/header.php' ;
?>

    <h2>Bienvenue sur mon super site !</h2>

    <?php
if (isset($_SESSION['utilisateur'])) { ?>
        <h3>Vous êtes connecté en tant que
            <?php echo $_SESSION['utilisateur']['identifiant']; ?>
        </h3>
        <?php                                                              
?>
            <?php } else { ?> <a href="login.php">Lien de connexion</a>
            <?php } ?>
            <?php
require_once('includes/footer.php');
?>
