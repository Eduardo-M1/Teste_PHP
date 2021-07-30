<?php

function SeculoAno($ano) {
    $seculo = 100;
    if($ano % $seculo == 0){
        $seculo = $ano / $seculo;
        echo "O ano $ano esta no seculo $seculo";
   }else{
        $seculo = $ano / $seculo;
        echo "O ano $ano esta no seculo ";
        echo ceil ($seculo);
    }
}

SeculoAno(1905);
?>