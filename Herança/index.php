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
    require_once 'Aluno.php';
    require_once 'Professor.php';
    require_once 'Funcionario.php';


    $pessoa = new Pessoa(); //Classe Mãe
    $pessoa->setnome("Beto");
    $pessoa->setidade(10);
    $pessoa->setsexo("M");
    
    print_r($pessoa);

    // Classes Filhas
    
    $a = new Aluno();
    $a->setnome("Felipe");
    $a->setidade(18);
    $a->setsexo("M");
    $a->setmatricula(true);
    $a->setcurso("Ciência da Computação");
    $a->fazerAniv();
    print_r($a);

    $p = new Professor();
    $p->setnome("Ana");
    $p->setidade(22);
    $p->setsexo("F");
    $p->setespecialidade("Biologia");
    $p->setsalario(1000);
    $p->receberAumento(1500);
    $p->fazerAniv();
    print_r($p);

    $f = new Funcionario();
    $f->setnome("Jorge");
    $f->setidade(48);
    $f->setsexo("M");
    $f->setsetor("Limpeza");
    $f->settrabalhando(false);
    $f->fazerAniv();
    
   
    print_r($f);
    ?>
    </pre>
</body>
</html>