<?php

function flippingBits($n) {
$check = decbin($n);
$chek2 =  (32-strlen($check))+strlen($check);
$d =  str_pad($check,$chek2 ,0,STR_PAD_LEFT);
 for($i=0; $i<strlen($d); $i++){
   $d[$i] =$d[$i] ==1?0:1;
 }
 return bindec($d);
}

echo flippingBits(4);

 ?>
