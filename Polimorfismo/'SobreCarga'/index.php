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
        require_once 'Cachorro.php';

        $c = new Cachorro();
        
        $c->reagirFrase("Passear");
        $c->reagirDono(false);
        $c->reagirDono(false);
        $c->reagirIdadePeso(3, 3);



        ?>
    </pre>
</body>
</html>