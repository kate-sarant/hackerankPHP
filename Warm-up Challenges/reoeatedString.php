<?php
$n = 10;
$s= 'aba';
function repeatedString($s, $n) {

  $regx ='/a/';
  // how many alphas thes string has?
      $alphaCount =preg_match_all($regx,$s,$matches);
                            //10/3 = 9
      $alphaCount *= floor($n/strlen($s));
// adding one more index equals to the modulus of 10%9=1 to reach the $n number.
    for($i= 0 ; $i<$n % strlen($s);$i++){
      if($s[$i]==="a"){
        $alphaCount = $alphaCount+1;
      }
    }
  return $alphaCount;
}


 ?>
