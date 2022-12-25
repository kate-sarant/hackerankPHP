<?php

$candles = [1,2,4,4];
function birthdayCakeCandles($candles) {
  sort($candles);
print_r(array_count_values($candles));
return  array_pop(array_count_values($candles));

}

 ?>
