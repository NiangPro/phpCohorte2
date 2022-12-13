<?php


if (isset($_POST['envoyer'])) {
    extract($_POST);
   echo "
        Prenom : ".ucfirst($prenom)." <br>
        Nom : ".ucfirst($nom)." <br>
        Email : ".ucfirst($email)." <br>
        mot de passe  : ".ucfirst($mdp)." <br>
   ";
}