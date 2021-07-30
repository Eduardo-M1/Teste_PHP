<?php
$n = array();
$m = 0;

for($i = 1; $i < 21; $i ++){
    $n[] = rand(1,10);
}
foreach($n as $value){
    echo $value."  ";
}

echo "<br>";
echo "<br>";
print_r(array_count_values($n));
echo "<br>";
echo "<br>";
foreach($n as $j => $value){
    echo $j.":".$value."  ";
}
for($i = 1; $i < 21; $i ++){
    $g = 0;
    $g = $i -1;
    if($n[$i] > $n[$g]){
        $m = $n[$i];
    };
}
echo "Ele se repete ";
echo max(array_count_values($n));
echo " vezes.";
?>