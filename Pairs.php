<?php

$arr=[1, 5, 3, 4, 2];
$k = 2;
function pairs($k, $arr) {
  $sum =0;

  foreach($arr as $value){
    if(in_array($value-$k,$arr)){
    $sum++ ;
    }
  }

  return $sum;
}

 ?>
