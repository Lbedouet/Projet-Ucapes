<?php
require_once 'includes/session_start.php';
require_once 'includes/db.php' ;
require_once 'includes/header.php' ;
?>

   <center><h2>Erreur 401 : accès interdit</h2><br/>
   	<h3>Vous n'avez pas l'autorisation de voir cette page </h3>
 	<br/>
 	<h4> Seul les administrateurs peuvent accèder a cette page </h4>
 	<br/>
<h2>   	<a href="index.php">Page d'accueil </a></h2>
 
<?php
require_once 'includes/footer.php' ;
?>
