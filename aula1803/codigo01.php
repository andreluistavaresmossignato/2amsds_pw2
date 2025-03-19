    <?php

    $num = [35, 1, 10, 23, 9, 25, 35];

    for ($i = 0; $i < sizeof($num); $i++) {
        echo "Valor na posição $i => $num[$i] \n";
    }

    for ($i = sizeof($num) - 1; $i >= 0; $i--) {
        echo "Valor na posição $i => $num[$i] \n";;
    } // mesma coisa do for anterior, só que ao contrário

        // sizeof = reconhece quantidade de números e caracteres dentro de um array