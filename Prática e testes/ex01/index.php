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
        require_once 'Celular.php';

        $c1 = new Celular();
        $c1->ligar();
        $c1->reiniciar();
        $c1->desligar();
        $c1->ligar();
        $c1->aumentarVolume();
        $c1->aumentarVolume();
        $c1->aumentarVolume();
        $c1->aumentarVolume();
        $c1->diminuirVolume();
        $c1->config();
        $c1->abrirMenu();
        //$c1->fecharMenu();

        print_r($c1);
    ?>
    </pre>

</body>
</html>