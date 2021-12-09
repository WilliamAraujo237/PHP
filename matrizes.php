<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>matrizes em php</title>
</head>
<body>
    <pre> 
        <?php
            //array simples
            $a=array(10,20,30,40,50);
            $a[]=60;
            unset($a[3]);    //para eliminar uma posição da mtriz de sua escolha
            print_r($a);
            echo "</br>";
        
            //array simples
            $n[]=1;
            $n[]=2;
            $n[]=3;
            $n[]=4;
            print_r($n);
            echo "</br>";
        
            //array usando range
            $v=range(5,20,2); //começando o array do 5 até o 20 contando de 2 em 2
            print_r($v);
            echo"</br>";

            //array de posição pré estabelecida
            $g=array(5=>"a",3=>"b",1=>"c");
            print_r($g);
            echo"</br>";

            //array personalizado para pessoa
            $c=array("nome"=>"ana","idade"=>20,"altura"=>1.60);
            $c["fuma"]="true";
            print_r($c);
            echo"</br>";

            //matrizes
            $z=array(array(1,2),array(3,4),array(5,6));
            $z[1][1]=$z[0][1];//para mudar um componente de uma posição por um valor já existente no array, fazendo a copia do mesmo
            print_r($z);
            
        
        ?>
    </pre>
</body>
</html>