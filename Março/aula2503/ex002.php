<?php 

    $num = [4, 6, -3, -6, -10, 6, 32, -9];

    $negativos = [];

    for ($i=0; $i < sizeof($num); $i++) { 
        if($num[$i] < 0) {
            $negativos = $num[$i];
            echo $num[$i] . "\n";
        }
    }