<?php 

    $vetor = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

    for ($i=0; $i < sizeof($vetor); $i++) { 
        if($vetor[$i] % 2 == 0) {
            $vetor[$i] = $vetor[$i] + 1;
        }

        else {
            $vetor[$i] = $vetor[$i] - 1;
        }

        echo $vetor[$i] . "\n";
    }