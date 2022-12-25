<?php

function jumpingOnClouds($c){
$jumps = 0;
$indx = 0;

do{
  $jumps++;
  $indx = [$indx+2] == 0 ?$indx+2 : $indx+1;
}while ($indx < count($c)-1);
return $jumps;
}

echo jumpingOnClouds($ar);


 ?>
