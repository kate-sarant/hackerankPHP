<?php
//return int: the cumulative likes at that day.
// day1 = $n/2 = like+ shares it with 3 the add;
// day 2 = $n/2 *3 receive the ad;

// eachday  floor(recipients/2) like and share * 3

    $n = 50;

    function viralAdvertising($n) {

      $Share =floor(5);
      $Like=floor(5/2);
      $day = 1;
      $Cum = 0;

      while($day <= $n){
          $Like =floor($Share/2) ;
          $Cum =$Cum+$Like;
          $Share = floor($Like)*3;
  $day++;
      }
      if($day >= $n){
     return $Cum;


    }

    }
 ?>
