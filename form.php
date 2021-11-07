<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulario com php</title>
</head>
<body>
    <?php

    $nome=$_GET['nome'];
    $sobre_nome=$_GET['sobre-nome'];
    $idade=$_GET['ano'];

    if (date('Y')- $idade >= 63) {
        $pessoa="já não é obrigado a votar";
    }elseif(date('Y') - $idade < 18){
        $pessoa="ainda não pode votar";
    }elseif (date('Y') - $idade > 18) {
        $pessoa="já é obridao a votar";
    }

    echo"olá $nome $sobre_nome você $pessoa"
    ?>
    <a href="formulario_com_php.html">voltar</a>
</body>
</html>
