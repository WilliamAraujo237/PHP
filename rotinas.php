<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>rotinas</title>
</head>
<body>
    <?php
    function soma($a,$b)
    {
        $r=$a+$b;
        echo "$r";
    }
    soma(10,10);
    ?>
    <?php
    function sem_parametros(){
        $n=func_get_args();
        $tot=func_num_args();
        $s=0;
        for ($i=0; $i < $tot; $i++) { 
            $s=$s+$n[$i];
        }
        return $s;
    }
    $r=sem_parametros(10,20);
    echo "A soma dos valores é $r";
    ?>
    
</body>
</html>