<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>les boucles</title>
</head>
<body>
    <?php
        $nbre = 5;
        $cpt = 0;
        $som = 0;
        $fact = $nbre; 

        for ($i=1; $i < $nbre ; $i++) { 
            if ($nbre % $i == 0) {
                $cpt++;
                $som += $i;
            }

            $fact *= $i;
        }

        if($cpt == 1 || $nbre == 1){
            echo $nbre." est un nombre premier<br>";
        }else{
            echo $nbre." n'est pas un nombre premier<br>";
        }

        if($nbre == $som){
            echo $nbre." est un nombre parfait<br>";
        }else{
            echo $nbre." n'est pas un nombre parfait<br>";
        }

        echo "$nbre != $fact <br>";

    ?>
</body>
</html>