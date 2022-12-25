<?php

$queue = [1,2,5,3,7,8,6,4];


function minimumBribes($queue) {
 $chaotic = false;
  $bribes = 0;
for($i = 0;$i<count($queue);$i++){
   if ($queue[$i]-($i+1) > 2) {
      $chaotic = true ;
    }
    for ($j = $queue[$i]-2; $j <$i; $j++) {
     if ($queue[$j] > $queue[$i]){
         $bribes++;
 };
      };
 };


 if($chaotic === true){
   echo 'Too chaotic'."\n";
 } else {
    echo $bribes."\n";

 };
};

echo minimumBribes($queue);


 ?>
