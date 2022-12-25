<?php
// from tutorial
function substrCount($n, $s){
$n = strlen($s);

$i = 0;

while($i< $n){
  $char =1;
  while($i +1 <$n && $s[$i] == $s[$i+1]){
    $i= $i+1;
    $char =$char +1;

  }
$rez += intval($char * ($char+1)/2);

$i +=1;
}
for($i =0 ;$i<= $n ;$i++){
  $char =1 ;

  while(
    $i+$char <$n && $i - $char >= 0 &&$s[$i] != $s[$i+1]&&
    $s[$i-$char]== $s[$i+$char]&&
    $s[$i-1] == $s[$i-$char]
  ){
    $char =$char +1 ;
  }
  $rez =$rez +($char-1);
}

      return $rez;
}

 ?>
