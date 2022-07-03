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



    require_once 'ContaBanco.php';
    $c1 = new ContaBanco();


    $c1->abrirConta("CC");
    $c1->depositar(110);
    $c1->sacar(100);
    $c1->pagarMensalidade();
    $c1->fecharConta();
    print_r($c1);

    $c2 = new ContaBanco();

    $c2->abrirConta("CP");
    $c2->depositar(110);
    $c2->sacar(57);
    //$c2->pagarMensalidade();
    $c2->fecharConta();
    print_r($c2);




    ?>
</pre>
</body>
</html>