<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="dias_da_semana.css">
    <title>Dias da semana</title>
</head>
<body>
    <div id="php">
    <?php
    $dia=isset($_GET['dia_da_semana']);
    switch ($dia) {
        case '2':
        case '3':
        case '4':
        case '5':
        case '6':
            $resultado="Dia de estudar";
            break;
        case '7':
        case '8':
            $resultado="Dia de folga, curta seu fim de semana :) ";
            break;
        default:
            $resultado= "Esse valor não é valido";
            break;
    }
    echo $resultado;
    ?>
    </div>
    <div id="buton">
    <a href="formulario_dias_de_estudo.html">Voltar</a>
    </div>
</body>
</html>