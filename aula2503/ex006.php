<?php 

    $gabarito = [1, 2, 3, 1, 3, 2, 3, 1, 2, 3, 2, 3, 1];
    $respostas = [1, 2, 3, 1, 3, 2, 3, 1, 2, 3, 2, 3, 1];
    $acertos = 0;

    for ($i=0; $i < 13; $i++) { 
        if($gabarito[$i] == $respostas[$i]){
            $acertos++;
        }
    }

    echo "Seu número de acertos: $acertos" . "\n";

    if($acertos == 13) {
        echo "GANHADOR, PARABÉNS!";
    }