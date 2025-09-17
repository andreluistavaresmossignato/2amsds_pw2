<?php

    $salario = 11000;
    $professor = "Rodrigo";
    $cargo = "Professor";
    $perc_aumento = 0.10;

    $novo_salario = $salario + ($salario * $perc_aumento);
    echo "O novo salário de $professor, no $cargo, será de R$ $novo_salario";