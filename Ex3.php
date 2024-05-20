<?php 
       $n1=$_GET['num1'];
       $fatorial=1;
       $count=1;

        while($count<=$n1){
            $fatorial *= $count;
            $count++;
  } 
  echo "</br>Calculando o fatorial de $n1";

  echo "</br>O fatorial de $n1 é: $fatorial";
 ?>
