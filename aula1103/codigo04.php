<?php 

    $a = 5.7;
    $b = 3.2;
    $c = 5.4; 

    $soma = (int)$a + (int)$b + (int)$c; // parte inteira de cada um (vai dar 13)
    echo $soma . "\n";

    $soma = (int) ($a + $b + $c); // arredonda parte inteira do resultado 14.3 = 14
    echo $soma . "\n";