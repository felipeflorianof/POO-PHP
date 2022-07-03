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

    $c1 = new Caneta;

    $c1->modelo = "bic";
    $c1->cor = "Red";
    //$c1->ponta = 1; Privado
    //$c1->carga = 100; Protegido
    //$c1->tampada = false; Protegido

    $c1->destampar();
    $c1->rabiscar();
   
    
    print_r($c1);

   $c2 = new Caneta;

   $c2->modelo = "bic";
   $c2->cor = "blue";
   //$c2->ponta = 0.5; Privado
   //$c2->carga = 5; Protegido
   //$c2->tampada = false; Protegido

   
  
  // print_r($c2);
    

    ?>
    </pre>
</body>
</html>