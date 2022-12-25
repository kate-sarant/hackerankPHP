<?php



// $nextStepTimeStart = $StartnextStepValue-2;
//$initialVal *2 = $nextStepValue;
//all the tower has same value

function strangeCounter($t) {
$num = $t;
$in = 3;
$time = 1;
$newTime =0;
$val = 0;
while($num >= $in){
  $in = $in*2;
  $time = $in-2;
  if($in+$time >=$num){
    break;
  }
}
$rez= ($in+$time)-$num;
return $rez;
}
echo strangeCounter(12);
 ?>
