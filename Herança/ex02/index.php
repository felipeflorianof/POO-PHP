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
    require_once 'Aluno.php';
    require_once 'Bolsista.php';
    require_once 'Visitante.php';

    $v = new Visitante();
    $v->setnome("Felipe");
    $v->setidade(18);
    $v->setsexo("M");

    $v->fazerAniv();
    print_r($v);
    
    $a = new Aluno();
    $a->setnome("Nicky");
    $a->setidade(21);
    $a->setsexo("F");
    $a->setmatricula(4344354);
    $a->setcurso("Astronomia");
    $a->pagarMensalidade();
    $a->fazerAniv();
    print_r($a);


    $bolsista = new Bolsista();
    $bolsista->setnome("Alan");
    $bolsista->setidade(18);
    $bolsista->setsexo("M");
    $bolsista->setmatricula(40028922);
    $bolsista->setbolsa(50.5);
    $bolsista->setcurso("Gastronomia");
    $bolsista->pagarMensalidade();
    $bolsista->fazerAniv();
    print_r($bolsista);
    ?>
    </pre>
</body>
</html>