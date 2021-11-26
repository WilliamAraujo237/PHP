<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usando for</title>
</head>
<body>
    <?php
    $valor=$_GET["numero"];
    if ($valor>=0) {
    for ($i=0; $i < 10; $i++) { 
        echo $valor++." ";
    }
    }else{
        for ($i=0; $i < 10; $i++) { 
            echo $valor--." ";
        }
    }
    ?>
    <a href="for_com_php.html">Voltar</a>
</body>
</html>