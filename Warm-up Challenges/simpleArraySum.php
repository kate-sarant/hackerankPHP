<?php


function simpleArraySum($ar){

$sum=array();
foreach ($ar as $key => $value) {
  if(is_array($value)){
    $v=  array_sum($value);
    array_push($sum,$v);
  }else{
    array_push($sum,$value);
  }
}
echo  array_sum($sum);
}
?>
