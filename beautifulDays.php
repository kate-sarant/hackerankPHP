<?php
function beautifulDays($i, $j, $k) {
  $Bday=0;
    foreach (range($i,$j) as $num) {
      $mystr = strrev(strval($num));
      $rez = abs($num - intval($mystr))/$k;
        if(!is_float($rez)){
        $Bday++ ;
        }

    }
    return $Bday;
}

 ?>
