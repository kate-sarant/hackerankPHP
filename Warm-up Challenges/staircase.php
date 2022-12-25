<?php
function staircase($n) {
  $arr = [];
  $space = "&numsp;";
  // $space = array(""); <---- for hackerank;
    for($j=1;$j<=$n; $j++){
        array_push($arr,str_repeat($space,$n-$j));
      array_push($arr,str_repeat("*",$j)) ;
      array_push($arr,"<br>");
  }
  foreach ($arr as $key => $value) {
    echo $value;
  }
}
 print_r(staircase($n));


 ?>
