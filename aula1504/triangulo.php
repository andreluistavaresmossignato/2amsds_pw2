<?php

function verificarSeEhTriangulo($l1, $l2, $l3) {
    if($l1 + $l2 > $l3 && $l1 + $l3 > $l2 && $l2 + $l3 > $l1) {
        return true;
    } else {
        return false;
    }
}

function VerTipoDeTriangulo($l1, $l2,$l3){
    if ($l1 == $l2 && $l2 == $l3){
        return "Equilátero";
    } else if($l1 == $l2 || $l1 == $l3 || $l2 == $l3){
        return "Isósceles";
    } else{
        return "Escaleno";
    }
}

$a = $_POST['lado1'];
$b = $_POST['lado2'];
$c = $_POST['lado3'];

$resultado = verificarSeEhTriangulo($a, $b, $c);
if ($resultado == true){
    echo "Forma um triângulo <br>"; 
    echo "Tipo: " . VerTipoDeTriangulo($a, $b, $c) . "<br>";
} else {
    echo "Não forma um triângulo" . "<br>";
}