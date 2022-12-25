<?php

$kate =[1,2,3,4,5,6];

function rotLeft($a, $d) {
$newar=[];
  for($i=$d; $i<count($a);$i++){
array_push($newar,$a[$i]);
     $a[$i];
  }
  for($i=0; $i<$d;$i++){
array_push($newar,$a[$i]);
     $a[$i];
  }
return  $newar ;
}
print_r(rotLeft($kate, 3)) ;
 ?>
