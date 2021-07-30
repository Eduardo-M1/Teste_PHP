<?php
function SequenciaCrescente($array){
    $array = array();
    sort($array);
    foreach ($array as $value){
        echo "$value";
    }
}

SequenciaCrescente([1, 3, 2, 1]);

?>