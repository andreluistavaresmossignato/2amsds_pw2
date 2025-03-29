<?php

    $vetor = [1, 5, 3, 61, 45, 67, -1, 90, 0, 5];

    $m = 5;
    $negativo = false;
    $foiEncontrado = false;

    for ($i = 0; $i < 10; $i++) { 
        if ($vetor[$i] == $m) {
            echo "Foi encontrado o $m na posição $i do vetor" . "\n";
            $foiEncontrado = true;
        }

        if ($vetor[$i] < 0) {
            $negativo = true;
        }
    }

    if($foiEncontrado == false) {
        echo "O número $m não foi encontrado no vetor" . "\n";
    }

    if($negativo == true) {
        echo "Número negativo encontrado. Encerrando o programa" . "\n";
    }
