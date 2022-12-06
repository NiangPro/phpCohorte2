<?php
    $chaine = "je suis nouveau dans php ";

    // strlen: renvoie la taille d'une chaine
    echo "<br>".strlen($chaine);

    // strpos: donne la position de la premiere occurence d'un caractere
    echo "<br>".strpos($chaine, "nouveau");
    
    //trim: enlever les spaces en debut et en fin de mot
    $chaine2 = trim($chaine);
    echo "<br>".strlen($chaine2);

    //str_replace: remplacer un mot dans une chaine
    $chaine3 = str_replace("php", "javaScript", $chaine);
    echo "<br>".$chaine3;

    //strtoupper : mettre en majuscule
    echo "<br>".strtoupper($chaine3);

    //strtolower : mettre en miniscule
    echo "<br>".strtolower("BONJOUR");

    // ucfirst : mettre le premier caractere d'une chaine en majuscule
    echo "<br>".ucfirst($chaine);

    // ucwords: transforme les premiers caractere des mots de notre chaine en majuscule
    echo "<br>".ucwords($chaine);

?>