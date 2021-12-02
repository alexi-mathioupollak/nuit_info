<?php
    //require_once './config/BDD.php';

    if ((isset($_SESSION['id']))){ //si une session existe déja (= utilisateur connecté) on redirige vers la page d'accueil
        
        echo '<p>id : $_SESSION['id']</p>';
        echo '<p>Pseudonyme : $_SESSION['pseudo']</p>';
        echo '<p>Email : $_SESSION['email']</p>';
    }


?>