<?php 

    $num_escolhido = 6;
    $n = [4, 3, 6, 7, 34, 5, 6, 6, 0, 6];
    $quant = 0;
    
    for ($i=0; $i < sizeof($n); $i++) { 
        if($n[$i] == $num_escolhido){
            $quant++;
        }
    }

    echo "O número $num_escolhido foi encontrado $quant vezes";

