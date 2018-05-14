<?php
require_once 'includes/session_start.php';
require_once 'includes/db.php' ;
require_once 'includes/header.php' ;
require_once 'includes/post_login.php';
?>

<?php
    if (!isset($_SESSION['utilisateur'])) { 
?>
   <h2>Connexion</h2>

    <form action="index.php" method="POST">
        <div class="champ">
            <label for="identifiant">Identifiant :</label>
            <input type="identifiant" name="identifiant" id="identifiant" required />
        </div>

        <div class="champ">
            <label for="motdepasse">Mot de passe :</label>
            <input type="password" name="motdepasse" id="motdepasse" required />
        </div>

        <div class="champ">
            <button type="submit" class="btn btn-default" name="connexion">Connexion</button>
        </div>
    </form>

<?php
    }
?>

 
<?php
require_once 'includes/footer.php' ;
?>
