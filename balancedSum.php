<?php
function balancedSums($arr) {

  $totalSum = 0;
  $runningSum = 0;
  for($i = 0; $i < count($arr); $i++) {
    $totalSum+= $arr[$i];
    echo '<br>';
    echo "total :".$totalSum;
  }

  for ($i = 0; $i < count($arr); $i++) {
    if ($runningSum == $totalSum - $runningSum - $arr[$i])
    echo '<br>';
    echo 'running:'. $runningSum - $arr[$i];
      return "YES";
    $runningSum+= $arr[$i];
  }
  return "NO";
}
echo balancedSums($arr);



// function balancedSums($arr) {
// foreach ($arr as $key => $value) {
//
// $a = array_slice($arr,0,$key);
// $b = array_slice($arr,$key+1);
// // array_shift($b);
//
// if (array_sum($a) === array_sum($b)){
//   $rez = "YES";
//   break;
// }else{
//   $rez = 'NO';
// }
//
// }
//   return $rez;
// }
// echo balancedSums($arr);



 ?>
