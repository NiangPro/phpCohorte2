<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Bonjour tout le monde en html</h2>
    <?php
        // declaration de variables 
        $prenom = "ALIOUNE";
        // declaration de constante en php 
        define("PI", 3.14);

        // affichages 
        echo "<h1>Bonjour tout le monde en php</h1>";
        echo "Prenom : $prenom ".PI;
    ?>

    <script>
        // Declaration de variables en javascript 
        let prenom = "PENDA";
        // declaration de constantes en javascript 
        const PI = 3.14;
        document.write("<h4>Bonjour tout le monde en javascript</h4>");
        document.write("Prenom : "+prenom + PI);
        document.write(`Prenom : ${prenom} ${PI}`);
    </script>
</body>
</html>
