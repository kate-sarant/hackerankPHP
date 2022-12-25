<?php


$k=[1];

function lonelyinteger($a) {
for($i =0;$i<count($k);$i++){
$hold=0;
  for($j =0;$j<count($k);$j++){
    if($k[$i] == $k[$j]){
      $hold=$hold+1;
    }
  }
  if($hold == 1){
echo $k[$i];
  }
  $hold=0;
}
}

 ?>
