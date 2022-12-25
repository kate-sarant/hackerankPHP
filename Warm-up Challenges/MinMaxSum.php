<?php

$arr = [7,69,2,221,8974];

function miniMaxSum($arr) {
$arrMy = $arr;
sort($arrMy);

$a = array_pop($arrMy);
foreach ($arrMy as $key => $avalue) {
  $aSum=+ $aSum+$avalue;
}

$arrB = $arr;
sort($arrB );
$b = array_shift($arrB);
foreach ($arrB  as $key => $value) {
  $bSum=+ $bSum+$value;
}
$rez = intval($aSum)." ".intval($bSum);
return $rez;
}

echo miniMaxSum($arr);
//----------- 2nd way
function miniMaxSum($arr) {

sort($arr);
$start =0;
$end =0;
for($i=0;$i< 4;$i++){
    $start +=$arr[$i];

}
for($i=count($arr);$i>count($arr)- 5 ;$i--){
    $end += $arr[$i];

}
echo $start." ".$end;
}
 ?>
