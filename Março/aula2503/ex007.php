<?php 

    $a = [10, 3, 30, 45, 6, 78, 4, 33, 89, 0];
    $posic;

    for ($i=0; $i < sizeof($a); $i++) { 
        $posic = $i + 1;
        if($a[$i] <= 10) {
            echo " $a[$i] na posição $posic" . "\n";
        }
    }     