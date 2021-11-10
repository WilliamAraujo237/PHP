<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"  type="text/css" href="repetição_while.css">
    <title>Estrutura de repetição while</title>
</head>
<body>
    <div>
        <?php
            $n=$_GET['idade'];
            $idade= date('Y') - $n;
            echo "Você tem $idade ano de idade</br>";
            $resultado=0;
            while (18 > $idade) {
            $idade++;
            $resultado++;
            }
            echo "Espere mais $resultado anos para tirar sua carteira motorista";
        ?>
        <a href="estrutura_de_repetição_form.html">Voltar</a>

    </div>
</body>
</html>