<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <pre>
    <?php

    require_once 'Monitor.php';
    $m1 = new Monitor;

    $m1->cor = "preto";
    $m1->marca = "TARGET";
    $m1->polegadas = 19;
    $m1->ligado = true;
    
    
    print_r($m1);

    $m2 = new Monitor;

    $m2->cor = "Branco";
    $m2->marca = "Apple";
    $m2->polegadas = 22;
    $m2->ligado = false;
   
    //print_r($m2);


    ?>
    </pre>
</body>
</html>