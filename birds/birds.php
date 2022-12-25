<?php
// $arr =[1,4,1,4,4,2,1,4,3,4,1,2,1,5];
function migratoryBirds($arr) {

$max = [];
 print_r(array_count_values($arr));

for($i = 0;$i<= count(array_count_values($arr));$i++){

    if(array_count_values($arr)[$i] == max(array_count_values($arr))){
      if(empty($max)){
        array_push($max,$i);
    }else{
      array_push($max,$i);
    }
  }
}

return min($max);
}
$file ='./testbirt.txt';

$lines = file($file);
$test = explode(" ",$lines[0]);

print_r(migratoryBirds($test));


     ?>
