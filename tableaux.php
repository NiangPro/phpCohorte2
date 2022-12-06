<?php

// declaration d'un tableau
$tab = ["ba", "fall", "niang", "seck"];

$tabInt = [2, 6, -1, 10, 1];

echo "<pre>";
// affichage des caractere
echo "<br>".$tab[0];
echo count($tab);


// count : donne la taille d'un tableau
echo "<br>".$tab[count($tab)-1];

// array_shift : supprimer le premier element d'un tableau
echo "<br>".array_shift($tab)."<br>";

    print_r($tab);

// les tableaux flêchés
$pers = [
    'prenom' => 'Bass',
    'nom' => 'Niang',
    'age' => '30',
    'sexe' => 'masculin',
];

echo "<br>".$pers['prenom'];
echo "<br>".$pers['nom'];
echo "<br>".$pers['age'];
echo "<br>".$pers['sexe'];

// array_pop : supprimer le dernier element d'un tableau
echo "<br>".array_pop($tab)."<br>";
print_r($tab);

// array_keys: renvoie les clés d'un tableau
print_r(array_keys($pers));

// array_keys: renvoie les groupes d'un tableau
print_r(array_values($pers));

// sort: trier le tableau
rsort($tabInt);
echo "<br>".print_r($tabInt)."<br>";

// affichage avec foreach
foreach ($tabInt as $value) {
   echo $value."\t";
}

// ajouter dans un  tableau
$tab[]= "Diouf";
print_r($tab);
echo "</pre>";
?>