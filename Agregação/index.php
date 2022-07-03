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

    
    require_once 'Pessoa.php';
    require_once 'Livro.php';

    $l = array(0, 1, 2, 3, 4, 5);
    $p = array(0, 1, 2);
    $p[0] = new Pessoa("Felipe", 18, "Masculino");
    $p[1] = new Pessoa("Jorge", 32, "Masculino");
    $p[2] = new Pessoa("Gabi", 18, "Feminino");
    print_r($p);


   
    $l[0] = new Livro("O Alquimista", "Paulo Coelho", 300, 154, false, $p[0]);
    $l[1] = new Livro("A loja de tudo", "Brad Stone", 300, 154, false, $p[2]);
    $l[2] = new Livro("O Poder da ação", "Paulo Vieira", 300, 154, false, $p[0]);
    $l[3] = new Livro("Iludidos pelo acaso", "Nassin Nicholas Taleb", 300, 154, false, $p[2]);
    $l[4] = new Livro("As cartas de Bezos", "Steve Anderson", 300, 154, false, $p[2]);
    $l[5] = new Livro("Do mil ao milhão", "Thiago Nigro", 300, 154, false, $p[0]);


    $l[0]->abrir();
    $l[0]->folhear(77);
    $l[0]->detalhes();

    $l[1]->detalhes();

    $l[2]->detalhes();

    $l[3]->detalhes();

    $l[4]->detalhes();
    
    $l[5]->detalhes();
    print_r($l);
    ?>
    </pre>
</body>
</html>