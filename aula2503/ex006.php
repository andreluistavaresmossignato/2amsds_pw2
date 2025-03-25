<?php 

    $g = [1, 2, 3, 1, 3, 2, 3, 1, 2, 3, 2, 3, 1];
    $r = [1, 2, 3, 1, 3, 2, 3, 1, 2, 3, 2, 3, 1];
    $acertos = 0;

    for ($i=0; $i < 13; $i++) { 
        if($g[$i] == $r[$i]){
            $acertos++;
        }
    }

    echo "Seu número de acertos: $acertos" . "\n";

    if($acertos == 13) {
        echo "GANHADOR, PARABÉNS!";
    }