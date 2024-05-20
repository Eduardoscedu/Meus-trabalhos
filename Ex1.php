    <?php 
      $n1=$_GET['num1'];
      $n2=$_GET['num2'];
      $n3=$_GET['num3'];
      $n4=$_GET['num4'];
      $n5=$_GET['num5'];
      
      // Maior
      $maior = $n1;
      if($n2>$maior) $maior=$n2;
      if($n3>$maior) $maior=$n3;
      if($n4>$maior) $maior=$n4;
      if($n5>$maior) $maior=$n5;
      echo "O maior numero é $maior<br />";
      
      $menor = $n1;
      if($n2<$menor) $menor=$n2;
      if($n3<$menor) $menor=$n3;
      if($n4<$menor) $menor=$n4;
      if($n5<$menor) $menor=$n5;
      echo "O menor numero é $menor<br />";
      
      //Média
      $media = $soma/5;
      echo "Média: $media<br />";
    ?>
 </body>