<?php
$ar = [
  10,10
,20,20
,20,
30,30,
30,30,
50,
70,
40,40,
40,40,
40];



$singles;
$pairs;


foreach (array_values(array_count_values($ar)) as $key => $value) {

    if($value == 1){
      $singles = $singles +1;
    }
      elseif($value % 2 == 0){
        echo $value;
        $pairs =  $pairs+ $value/2;
      }
      else{
        if(($value % 2 !== 0) && $value !== 1){
              echo "<br>";

              $pairs = $pairs + (($value/2)%10);
              $singles =$singles+1;


        }

}
}

 ?>
