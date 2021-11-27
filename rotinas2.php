<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rotinas parte 2</title>
</head>
<body>
    <?php
    function teste($v){
       $r =+ $v;
       echo $r;
    }
    $r=0;
    teste(10)
    ?>

    <?php
    function teste2(){
        $nun=func_get_args();
        $tot=func_num_args();
        $r2=0;
        for ($i=0; $i < $tot; $i++) { 
            $r2 =$r2 + $nun[$i];
        }
        return $r2;
    }
    $r2=teste2(10,10,10,10,10);
    echo $r2;
    ?>

    <?php
    function teste3(&$teste){
        $teste += 10;
        return $teste;
    }
    $a=10;
    $V=teste3($a);
    echo $V." e ". $a;
    

    ?>
</body>
</html>