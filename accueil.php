<?php
require_once 'includes/session_start.php';
require_once 'includes/db.php' ;
require_once 'includes/header.php' ;
?>
<div class="flexBox">
    <div class="espaceUcape">
        <h2>Navigation</h2>

        <?php
            if ($_SESSION['utilisateur']['admin'] == 1){
        ?>
        <div class="btn-group-vertical" role="group" aria-label="...">
            <a class="btn btn-default" href="#">Elèves</a>
            <a class="btn btn-default" href="documentation.php">Documentations</a>
        </div>
        <?php
            }
            else{
        ?>  
        <div class="btn-group-vertical" role="group" aria-label="...">
            <a class="btn btn-default" href="choix_etablissement.php">Choix des établissements</a>
            <a class="btn btn-default" href="detailed_student_profile.php">Detailed Student profile</a>
            <a class="btn btn-default" href="documentation.php">Documentation</a>
        </div>
        <?php
            }
        ?>
    </div>
    <div class="espaceUcape">
        <h2>Bienvenue sur l'Espace Ucape</h2>
        <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar tempor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam fermentum, nulla luctus pharetra vulputate, felis tellus mollis orci, sed rhoncus sapien nunc eget.
        </p>
        <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar tempor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam fermentum, nulla luctus pharetra vulputate, felis tellus mollis orci, sed rhoncus sapien nunc eget.
        </p>
    </div>
</div>

<?php
require_once 'includes/footer.php' ;
?>
