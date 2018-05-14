<?php
require_once 'includes/session_start.php';
if(isset($_SESSION['utilisateur'])){
    header('Location: index.php');
}
require_once 'includes/header.php';
require_once 'includes/post_login.php';
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
            <button type="submit" name="connection">Connectez-vous</button>
        </div>
    </form>


    <?php
require_once 'includes/footer.php';
?>