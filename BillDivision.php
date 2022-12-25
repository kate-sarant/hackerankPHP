<?php
function bonAppetit($bill, $k, $b) {
$answ=null;
$sum =0;
unset($bill[$k]);
$sum =array_sum($bill);


$half = $sum/2 ;
if($half== $b){
    $answ='Bon Appetit';
}else{
    $answ=$b-$half;
}
return $answ;
}

 ?>
