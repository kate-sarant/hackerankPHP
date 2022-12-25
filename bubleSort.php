<?php


 $arr = [4,2,3];
// $arr = [3,2,5];

 function swap($a){
$times = intval(0);
  do{
    $swapped = false;
    for($i=0;$i<count($a)-1;$i++){
      if($a[$i] >$a[$i+1]){
        list( $a[$i + 1], $a[$i] ) =
  			array( $a[$i], $a[$i + 1] );
  				$swapped = true;
          $times++;
  			}
      }
    }
    while( $swapped );
      $k = "Array is sorted in $times swaps."."\nFirst Element: ".min($a)."\nLast Element: ".end($a);
      echo $k;
  }






print_r(swap($arr));

 ?>
