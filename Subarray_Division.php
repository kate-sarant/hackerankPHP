<?php

$s=  [2,3,4,4 ,2 ,1, 2 ,5, 3 ,4 ,4, 3, 4 ,1,3, 5 ,4 ,5, 3, 1 ,
1,5 ,4 ,3, 5 ,3 ,5 ,3 ,4 ,4 ,2, 4 ,5 ,2 ,3, 2 ,5, 3,
4, 2, 4, 3 ,3 ,4 ,3 ,5 ,2 ,5 ,1 ,3,1 ,4, 2, 2, 4, 3, 3 ,3 ,3 ,4 ,1 ,1, 4, 3,1 ,5, 2, 5, 1, 3, 5,
4, 3 ,3 ,1 ,5,3 ,3 ,3 ,4 ,5 ,2];
$d =  26;
$m = 8;
// return int: the number of ways the bar can be divided

function birthday($s, $d, $m) {

$b =array();
$matches;
do{

    for($i=0;$i<count($s);$i++){
array_push($b,$s[$i]);

if(array_sum($b) !== $d && count($b) == $m ){
  array_shift($b);
}elseif(array_sum($b) == $d && count($b) == $m ){
  $matches++;

array_shift($b);
}else{
  $matches=$matches+0;
}

  }
}while($i<=count($s)-1);
return $matches;

}
