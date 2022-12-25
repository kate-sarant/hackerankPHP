<?php
$arr=[35, 65, 69, 28,12,69,37,80,80,50,80,50,15,57,79,69,57,65,15,69,57,50,65,2,14,64,15,65,65,5,15,64,57,37,50,12,64,37,28,20,80,80,50];
function equalizeArray($arr) {
  $val = array_count_values($arr);
  $k = array_values($val);
  $sum=0;
  $count=0;
   foreach($k as $val){
     if($val!= max($k)){
       $count++;
       $sum=$sum+$val;
     }
   }
   if($count<count($k)){
     $sum =$sum + (((count($k)-$count)-1)*max($k));
   }
    return $sum;
}
echo equalizeArray($arr);

 ?>
