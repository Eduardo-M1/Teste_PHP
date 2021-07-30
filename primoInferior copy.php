<?php

function PrimoInferior($num){
    
    $c = $num - 1;

    for($count=1; $count<$num; $count++){
        $p = 0;
        $a = 0;
        $c = $c - 1;
    for($i=2; $i<$c; $i++){
    if($c % $i == 0){
     $p++;
     echo"$p-";
    }
    }if($p = 1){
        $a = $c;
    }
}
echo "O maior número primo abaixo de $num é $a." ;
echo"<br>c:".$c."<br>p: ".$p;
}


PrimoInferior(4);

?>