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
    require_once 'Video.php';
    require_once 'Viewer.php';
    require_once 'Visualizacao.php';
    


    // FILMES:

    $video[0] = new Video("Matrix");
    $video[1] = new Video("Avengers");
    $video[2] = new Video("Superman");
    $video[3] = new Video("InterStellar");
    $video[4] = new Video("Star Wars");
    $video[5] = new Video("Pirates of the Caribbean");


    // ESPECTADORES:

    $viewer[0] = new Viewer("Felipe Floriano", 18, "M", "FF@gmail.com");
    
    // Visualização de tudo

    $visu[0] = new Visualizacao($viewer[0], $video[2]);
    $video[2]->like();
    $video[2]->like();
    $video[2]->like();
    $video[2]->play();
   
    
    
    print_r($visu);

    ?>     
    </pre>
</body>
</html>