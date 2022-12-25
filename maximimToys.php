<?php
////money we have for spending :)
$k = 50;
// 1 12 5 111 200 1000 10
////toys to buy
$prices = [1 ,12 ,5 ,111 ,200 ,1000 ,10];
function maximumToys($prices, $k) {
sort($prices);
$toys=0;
  foreach ($prices as  $value) {
    if($k-$value >= 0){
      $k =$k-$value ;
      $toys = $toys+1;
    }else{
      return "toys: ".$toys;
      break;
    }
  }
}
print_r(maximumToys($prices, $k));
 ?>
