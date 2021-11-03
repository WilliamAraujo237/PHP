<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de descoto</title>
</head>
<body>
    <?php
    $valor = $_GET["val"];
    $desconto = $valor*10/100;
    echo"O produto custava R$".number_format($valor,2,',','.');
    echo"<br/> Com um desconto de 10% o valor do produto agora será R$". number_format($valor,2,',','.');
    echo"<br/>";

    $inflacao=$valor + ($valor*10/100);
    echo"<br/>O valor desse produto com um aumento de 10% ficaria";
    echo "<br/>"."R$". number_format($inflacao,2,'.',',');
    ?>
</body>
</html>