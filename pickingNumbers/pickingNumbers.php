<?php
function pickingNumbers($a) {
natsort($a);

$c = array_count_values($a);
$stock=0;

for($j=0;$j<count($c);$j++){
$k = array_keys($c);
$v = array_values($c);
$rez = max($v);

if(abs($k[$j] - $k[$j+1]) == 1 && $v[$j] + $v[$j+1]>$stock){
$stock = $v[$j]+$v[$j+1];
}

}
$rez = $rez > $stock?$rez:$stock;

 return $rez;
}


$file = './test.txt';
// $testCases = './BalancedBrackets/testCase.txt';
$lines = file($file);
// $testCasesF=file($testCases);
$testaki = ($lines[0]);

$a = array_map('intval', preg_split('/ /', $testaki, -1, PREG_SPLIT_NO_EMPTY));

echo pickingNumbers($a);

 ?>
