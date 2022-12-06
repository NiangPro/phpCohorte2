<?php
    $chaine ="Je suis une ChAine de CArActeres";
    $cpt1 = 0;
    $cpt2= 0;
    $chaine2 = strtolower($chaine);
    for ($i=0; $i <strlen($chaine2) ; $i++) { 
      if ($chaine2[$i] == "a" || $chaine2[$i] == "e" || $chaine2[$i] == "o" || $chaine2[$i] == "i" || $chaine2[$i] == "u" || $chaine2[$i] == "y") {
        $cpt1 +=1;
        // $cpt = $cpt +1 ;
      }elseif($chaine2[$i]!=" "){
        $cpt2 +=1;
      }
    }

    echo "Le nombre de voyelles dans '".$chaine."' est: ".$cpt1;
    echo "<br> Le nombre de consonnes dans '".$chaine."' est: ".$cpt2;
?>