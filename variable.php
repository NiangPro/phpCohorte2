<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $prenom ="AIDA";
    $nom ="SOW";

    
    $age = 25.5;
    define("Raux",2);
    settype($age, "integer"); // modifier le type d'une variable
    echo  gettype($prenom); // pour avoir le type d'une variable
    unset($prenom); // elle permet de supprimer une variable

    // les conditons 
    if($age >= 18){
        echo "Vous etes majeure <br>";
    }else{
        echo "Vous etes mineure <br>";
    }

    if (isset($prenom)) {// tester l'existance d'une variable
        echo"prenom:$prenom<br> "; 
    }else{
        echo"variable inexistante <br> ";
    }
    echo"nom:$nom<br>age:$age<br>Raux".Raux;

    for ($i=1; $i <=10 ; $i++) { 
        echo $i." - ";
    }

    $i = 1;
    while($i <= 10){
        echo $i." *";

        $i++;
    }
    ?>
    <script>
      let prenom="AIDA";
      let nom ="SOW";
      let age ="20";
      const Raux=2;
      document.write(`<br>prenom:${prenom}<br>
      nom:${nom}<br>
      age:${age}<br>
      Raux:${Raux}`)

      for (let i=10; i >=1 ; i--) { 
        document.write(i+" - ");
    }
      </script>
</body>
</html>