<?php
// $arr =[
//   [2,3,4,5,6,7],
//   [8,7,6,5,4,3],
//   [1,2,9,-5,-4,-3],
//   [1,2,9,-5,-4,-3],
//   [1,2,9,-5,-4,-3],
//   [1,2,9,-5,-4,-3],
// ];
$arr = [
[1,2,3],
[4,5,6],
[9,8,9],
];
// print_r($arr );

echo "<br>";
function diagonalDifference($arr) {
$a=0;
$b=0;
for($i = 0 ; $i< count($arr);$i++){
    for($j = 0 ; $j< count($arr);$j++){
    if($j == $i){
$a=$a +$arr[$i][$j];

    }
  }
}

  $second_array = (array_reverse($arr));
  for($i = 0 ; $i< count($second_array);$i++){
      for($j = 0 ; $j< count($second_array);$j++){
      if($j == $i){
              $b=$b+  $second_array[$i][$j];
      }
    }
  }
   $g = abs($a-$b);

  return  $g ;
}


 ?>
