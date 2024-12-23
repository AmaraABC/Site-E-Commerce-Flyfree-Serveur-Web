<?php
$page = (isset($_GET['page'])) ? $_GET['page'] : 'home';

switch ($page) {
    case 'home':
        //echo "Page d'accueil";
        include_once('./View/home.php');
        break;

    case 'destination':
        //echo "Catalogue";
        include_once('./Controller/destinationController.php');
        $destinations = new destinationController;
        $destinations->destinations();
        break;

    case 'inscription':
        //echo "Page d'inscription";
        include_once('./View/inscription.php');
        break;

    case 'connexion':
        //echo "Connexion";
        include_once('./View/connexion.php');
        break;

    case 'panier':
        //echo "Mon panier";
        include_once('./View/panier.php');
}
