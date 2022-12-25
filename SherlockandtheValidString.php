<?php
function isValid($s) {

$array_str=str_split($s);
$a = array_count_values($array_str);
$a= array_values($a);
$k = $a[0];

$sub=0;
for($i= 0;$i<count($a);$i++){
if($a[$i]!=$k){
$sub++;
    }
      }
       $rez =$sub >1?"NO":"YES";

 return $rez;

 }


 ?>
