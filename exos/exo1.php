<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exos sur les tableaux</title>
</head>
<body>
    <pre>
    <?php 

        $tab = [-10, -7, 23, 7, 8, 5, 13, 12, 16, 20];
        $tabPremiers = [];
        $tabPairs = [];
        
        foreach($tab as $val){
            $cpt = 0;
            for ($i=1; $i <= $val ; $i++) { 
                if($val < 10 && $val % $i == 0)
                    $cpt++;
            }
            if($cpt == 2 || $val == 1)
                $tabPremiers[] = $val;

            if($val % 2 == 0 && $val > 10)
                $tabPairs[] = $val;
        }

        print_r($tabPremiers);
        print_r($tabPairs);


    ?>  
    </pre>
</body>
</html>