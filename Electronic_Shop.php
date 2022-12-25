<?php

function getMoneySpent($keyboards, $drives, $b) {
    $purchased=[];
  for($i=0 ;$i<count($keyboards);$i++){
      for($j=0 ;$j<count($drives);$j++){

      $m = ($keyboards[$i]+$drives[$j] <=$b )?
        array_push($purchased,$keyboards[$i]+$drives[$j]):
        array_push($purchased,-1);
      }

  }
  $r= max($purchased);

return $r;
}

 ?>
