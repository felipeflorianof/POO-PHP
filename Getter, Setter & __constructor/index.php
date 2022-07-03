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

    require_once 'Caneta.php';
    /*$c1 = new Caneta();

    $c1->setModelo("BIC");
    $c1->setPonta(0.5);
    print "Você criou uma caneta do modelo ". $c1->getModelo()." e de ponta ".$c1->getPonta();
    print_r($c1);*/

    $c2 = new Caneta("BIC", "Preto", 0.5, true, 99);

    print_r($c2);

    ?>
    </pre>
</body>
</html>