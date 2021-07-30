$n = $num;
    $i = $num;
    while ($n % $i <> 0 and $i > $num ) {
        echo $i++; 
    }
    if($n % $i <> 0)


  for($count = 2; $count < $num; $count ++){
      $p = $num;
      $p--;
  if($p % $count == 0){
        $p --;
        $n ++;
  }


function maiorNumero($repete){

for($i=0;$i<20;$i++){
    if($n[$i] = $repete){
        $b ++;
    }
}
return $b;
}

function contaVet($n, $a) {
$b = 0;
for($i=0;$i<20;$i++){
    if($n[$i] = $a){
        $b ++;
    }
}
return $b;
}

for($i=0;$i<20;$i++){
if($n[$i] = $repete){
    $maior == $n[$i];
}
}

function cmp($a, $b)
{   
    if ($a == $b) {
    return 0;
    }
    return ($a < $b) ? -1 : 1;
}

$a = array(3, 2, 5, 6, 1);

usort($a, "cmp");

foreach ($a as $key => $value) {
    echo "$chave: $valor\n";
}