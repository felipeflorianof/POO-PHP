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
        require_once 'Animal.php';
        require_once 'Mamifero.php';
        require_once 'Cachorro.php';
        require_once 'Canguru.php';
        require_once 'Reptil.php';
        require_once 'Tartaruga.php';
        require_once 'Cobra.php';
        require_once 'Ave.php';
        require_once 'Arara.php';
        require_once 'Peixe.php';
        require_once 'Goldfish.php';


        $m = new Tartaruga();
        $m->setpeso(34.5);
        $m->setidade(12);
        $m->locomover();
        $m->alimentar();
        $m->emitirSom();
        print_r($m);
        
    ?>
    </pre>
</body>
</html>