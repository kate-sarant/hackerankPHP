<?php
//search

function icecreamParlor($m, $arr) {
$bag = array();
for($i=0;$i<=count($arr);$i++){
    for($j=1;$j<count($arr);$j++){
     if($arr[$i]+$arr[$j] == $m && $i != $j){

     array_push($bug,$i+1);
     array_push($bug,$j+1);
      return $bug;
     break;
    };
};
};
};
print_r(icecreamParlor($m, $arr));

 ?>
