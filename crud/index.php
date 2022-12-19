<?php
require_once("partials/_header.php");  
require_once("basededonnees.php");  
require_once("ajoutController.php");



if (isset($_GET['page'])) {
    switch ($_GET['page']) {
        case 'ajout':
            require_once('ajout.php');
            break;
        case 'liste':
                $listes = listePersonnes();
                require_once('liste.php');
                break;
        default:
        require_once('liste.php');
        break;
    }
}else{

    require_once("liste.php");  
}




require_once("partials/_footer.php"); ?>