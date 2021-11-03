<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Interação com usuario</title>
</head>
<body>
    <?php  
     $nota=$_GET["a"];
     $resultado_nota= $nota/2;
     $resultado="";
     if ($resultado_nota>=7) {
         $resultado="você foi apovado parabéns!!!";
     }else{
         $resultado="você foi reprovado estude mais um pouco =)";
     }
     echo"A média da instituição é 7 sua nota foi $resultado_nota";
     echo"<br/> $resultado";
    ?>
</body>
</html>