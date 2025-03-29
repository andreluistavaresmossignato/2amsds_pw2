<?php 

    $n = [2];
    $posic;

  for ($i=0; $i < 10; $i++) { 
    $sub = $n[$i] * 2;
    $posic = $i + 1;
    $n[$posic] = $sub;
    echo "$n[$i]" . "\n";
  } 