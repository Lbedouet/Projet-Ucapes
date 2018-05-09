<?php
    require_once 'includes/session_start.php';
    require_once 'includes/header.php';

    if (isset($_SESSION['utilisateur'])) {
        unset($_SESSION['utilisateur']);
    }

    header('Location: index.php');
?>
