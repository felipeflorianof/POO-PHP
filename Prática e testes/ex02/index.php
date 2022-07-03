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

    $p = array(0, 1, 2);
    $p[0] = new Pessoa("Felipe", 18, "M");
    $p[1] = new Pessoa("Johnny Depp", 59, "M");
    $p[2] = new Pessoa("Froid", 28, "M");
    print_r($p);
    



    $l = array(0, 1, 2, 3, 4, 5);
    $l[0] = new Livro("A revolução dos bichos", "George Orwell", 150, $p[0]);
    $l[0]->abrir();
    $l[0]->folhear(90);
    $l[0]->voltarPag();
    $l[0]->voltarPag();
    $l[0]->detalhes();

   /* $l[1] = new Livro("Mais esperto que o diabo", "Napoleon Hill", 300, $p[1]);
    $l[2] = new Livro("O Pequeno Príncipe", "Antoine de Saint-Exupéry", 120, $p[2]);    
    $l[3] = new Livro("O Pode da ação", "Paulo Vieira", 120, $p[2]); 
    $l[4] = new Livro("A loja de tudo", "Brad Stone", 120, $p[2]); 
    $l[5] = new Livro("Do Mil ao Milhão", "Thiago Nigro", 320, $p[2]); */
   
    print_r($l);


    ?>
    </pre>
</body>
</html>