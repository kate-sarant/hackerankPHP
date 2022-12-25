<?php

function maximizingXor($l, $r) {

$max =($l>$r)?$l:$r;
$min =($l>$r)?$r:$l;
$result = array(0);
$i = $min;
$num = $min;
do{
  $i++ ;
  if($i^$num >  array_values($result)){
      array_push($result,$num ^ $i);

      $key = array_search(min($result), $result);
      unset($result[$key]);
  }
  if($i == $max ){
    $num++;
    $i =$min;
}
}while($num <= $max);
foreach ($result as $key => $value) {
  return $value;
}
}
 echo maximizingXor(11, 100);


 ?>
