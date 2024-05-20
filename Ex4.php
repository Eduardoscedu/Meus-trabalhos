  <?php
  $n1 = $_GET['num1'];
  $div = 0;

  for($x = 0; $x <= $n1; $x++)
    {

        echo("{$x} ");
    }

  for($count=2; $count<$n1; $count++)
   if($n1 % $count == 0){
    $div++;
   }
  
  if($div)  echo "<b><br>Não é, tem divisores além de 1 e ele mesmo<b>";
  else    echo "<b><br>{$n1} É primo!<b>";
  
 ?>
