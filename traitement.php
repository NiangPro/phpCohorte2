<?php


if (isset($_POST['envoyer'])) {
    extract($_POST);
   echo "Bonjour ".$prenom." au niveau de la page traitement";
}