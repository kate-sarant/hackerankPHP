<?php
function plusMinus($arr) {
  $positives=0;
  $negtvs =0;
  $zeros=0;
     foreach($arr as $value){
         if($value < 0){
            $negtvs++;
         }
           elseif($value == "0"){
            $zeros++ ;
         }else{
           $positives++;
         }
     }
     $positives = (count($arr)/$positives);
     $negtvs = (count($arr)/$negtvs);
     $zero =  (count($arr)/$zeros );

$poss = number_format(1/$positives,6,".",',') ;

$neg =  number_format(1/$negtvs ,6,".",',');

$zer =  number_format(1/$zero,6,".",',');
    echo $poss."\n".$neg."\n".$zer;
}
 ?>
