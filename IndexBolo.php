<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Classe Bolo</title>
</head>
    <body>
            
        <?php

        require_once "Bolo.php";

        $bolo = new Bolo();

        $bolo ->setNome("Floresta Negra");
        echo("<br>");

        $bolo ->setTipo("Recheado");
        echo("<br>");

        $bolo ->setSabor("Chocolate, trufa, creja e chantily");
        echo("<br>");

        $bolo ->setPeso(3);
        echo("<br>");

        $bolo ->setPreco(180);
        echo("<br>");

        $bolo ->coberturaAdicionalChocolate();

        print("<br><br>
        Nome {$bolo->getNome()}<br>
        Tipo {$bolo->getTipo()}<br>
        Peso {$bolo->getPeso()}<br>
        Preço {$bolo->getPreco()}");

        echo("<br><br>");
        $bolo -> inserirMassa();
        echo("<br>");
        $bolo -> untarForma();
        echo("<br>");
        $bolo -> inserirMassa();
        echo("<br>");
        $bolo -> limparForma();
        echo("<br>");
        $bolo -> inserirMassa();

        ?>
        
    </body>
</html>
