<?php
function missingNumbers($arr, $brr) {
$missing=[];
natsort($arr);
natsort($brr);

$variArr=array_count_values($arr);
$varBrr =array_count_values($brr);

foreach ($varBrr as $keyB => $valueB) {
  foreach ($variArr as $keyA => $valueA) {
    if($keyB == $keyA && $valueB != $valueA ){
          array_push($missing,$keyB);
    }elseif(!in_array($keyB,$arr)){
      if(!in_array($keyB,$missing)){
        array_push($missing,$keyB);
      }
    }else{
      continue;

    }
natsort($varBrr);

  }
}
natsort($missing);
return $missing ;
}

 ?>
