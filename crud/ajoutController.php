<?php

    if(isset($_POST['valider'])){
        extract($_POST);
        if(ajouterPersonne($db, $prenom, $nom, $tel, $adresse, $sexe, $datenais)){
            die("Ajout avec succes");
        }else{
            die("Erreur d'ajout personne");
        }
    }