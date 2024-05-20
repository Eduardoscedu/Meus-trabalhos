<?php 
$n1=$_GET['num1'];
$n2=$_GET['num2'];
$soma = 0;

    function somar($n1, $n2)
    {
        return $n1 + $n2;
    }

    $resultado = somar($n1,$n2);
    echo $resultado;
    ?>
