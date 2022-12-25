<?php


$a ='jdfh';
$b = 'fds';

function buildPalindrome($a,$b){
$arr =str_split($a);

$brr = str_split($b);


$k = array_intersect($arr,$brr);
sort($k);

if($k == null){
$rez = -1;
return $rez;
}


print_r($k);
if(count($k)>=3){

    unset($k[count($k)-1]);

$new = implode($k);

$rez = substr($new.$new,0,-1);
$rez;
}else{

  sort($k);
  $start=implode($k);
  $end = strrev($start);

  if($start[-1] == $end[0]){
   for($i=0;$i< strlen($a);$i++){
     if($a[$i] == $end[0]){
       $start.=$a[$i+1];
     }
   }
}
$all =($start.$end);
$rez = $all ;

}

return $rez;
}
echo buildPalindrome($a,$b);

 ?>
