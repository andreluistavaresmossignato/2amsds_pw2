<?php 

    $pri = $alunos[0];
    $ult = $alunos[0];
    for($i= 1; $i <sizeof($alunos); $i++){
        if($pri < $alunos[$i]) $pri = $alunos[$i];
        if($ult > $alunos[$i]) $ult = $alunos[$i];
    }

    echo "Primeiro da ordem : $pri \n";
    echo "Último da ordem : $ult \n";