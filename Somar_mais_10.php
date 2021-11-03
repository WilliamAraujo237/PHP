<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>adicione mais 10 numeros ao que escolheu</title>
</head>
<body>
    <?php
    $numero=$_GET["N"];
    for ($i=0; $i< 10 ; $i++) { 
        $numero++;
        echo $numero."<br/>";
    }
    ?>
</body>
</html>