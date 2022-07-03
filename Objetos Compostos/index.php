<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Document</title>
</head>
<body>

  
    
    <div class="apresentar">
  
    <pre>
    <?php
    require_once 'Lutador.php';
    require_once 'Luta.php';
    //Estamos passando os valores por parâmetro por que o método especial __construct foi feito de uma forma diferente que permite isso.

    $l = array(0, 1, 2, 3, 4, 5);
    $l[0] = new Lutador("Pretty boy ", "França ", 35, 1.75, 68.9, 11, 3, 1);
    $l[1] = new Lutador("Putsscript", "Brasil", 29, 1.68, 57.8, 14, 2, 3);
    $l[2] = new Lutador("Snapshadow", "EUA", 35, 1.65, 80.9, 12, 2, 1);
    $l[3] = new Lutador("Dead Code", "Austrália", 28, 1.93, 81.6, 13, 0, 2);
    $l[4] = new Lutador("Ufocobol", "Brasil", 37, 1.70, 119.3, 5, 4, 3);
    $l[5] = new Lutador("Nerdard", "EUA", 30, 1.81, 105.7, 12, 2, 4);

    $uec01 = new luta();
    $uec01->marcarLuta($l[5], $l[4]); 
    $uec01->lutar();
    
    


    ?>
    </pre>
</div>


</body>
</html>