<?php

    $vetor1 = [4, 5, 2, 4, 8];
    $vetor2 = [2, 4, 6, 8, 1];

    $vetor3 = [];

    for ($i=0; $i < 5; $i++) { 
        $vetor3[$i] = $vetor1[$i] + $vetor2[$i];
        echo $vetor3[$i] . "\n";
    }