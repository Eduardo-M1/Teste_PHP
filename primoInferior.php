<?php

function PrimoInferior($num){
    $j = 1;
    $nprimo = 0;
    while ($j <= $num){
    $i = 2;
    $p = 1;
    while ($i < $j){
        if ($j % $i == 0) {
            $p = 0;
            break;
        }
        $i++;
    }
    if ($p) {
        $nprimo = $j;     
    }
    $j++;
}
    echo "Número: $num = $nprimo";
}


PrimoInferior(30);

?>