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


    require_once 'Banco.php';

    $c1 = new Banco(0, false);
    $c1->numConta = 40028922;
    $c1->dono = "Jubileu";
    $c1->abrirConta("CC");
    $c1->depositar(250);
    
    print_r($c1);

    $c2 = new Banco(0, false);
    $c2->numConta = 10026923;
    $c2->dono = "Creuza";
    $c2->abrirConta("CP");
    $c2->depositar(350);
    $c2->sacar(100);
    
    print_r($c2);

    ?>
    </pre>

</body>
</html>