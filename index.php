<?php
require_once 'includes/session_start.php';
require_once 'includes/db.php' ;
require_once 'includes/header.php' ;
?>

<?php
    if (!isset($_SESSION['utilisateur'])) { 
?>
   <h2>Connexion</h2>

    <form action="login.php" method="POST">
        <div>
            <label for="identifiant">Identifiant :</label>
            <input type="identifiant" name="identifiant" id="identifiant" required />
        </div>

        <div>
            <label for="motdepasse">Mot de passe :</label>
            <input type="password" name="motdepasse" id="motdepasse" required />
        </div>

        <div>
            <button type="submit" name="connexion">Connectez-vous</button>
        </div>
    </form>

<?php
    }
?>
    
<?php
require_once 'includes/footer.php' ;
?>
