<?php

try{

    $db = new PDO("mysql:host=localhost;dbname=mydb", "root", "");
}catch(PDOException $e){
    die("Erreur : ".$e->getMessage());
}


function ajouterPersonne($db, $prenom, $nom, $tel, $adresse, $sexe, $datenais){
    try {
        $req = $db->prepare("INSERT INTO personne VALUES(null,:p, :n, :t, :a, :s, :d)");
        return $req->execute([
            'p' =>$prenom,
            'n' =>$nom,
            't' =>$tel,
            'a' =>$adresse,
            's' =>$sexe,
            'd' =>$datenais
        ]);
    }catch(PDOException $e){
        die("Erreur : ".$e->getMessage());
    }
}