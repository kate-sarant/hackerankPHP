<?php
function gradingStudents($grades) {
  for($i=0;$i<count($grades);$i++){
  $gds = strval($grades[$i]);
$num=0;
if ($gds > 34 && $gds<100){

  if($gds[-1]>5){
      $num= $gds[0]+1;
      $num.=0;
    } else{
      $num.= $gds[0];
      $num.= 5;
    }
    if($num-$gds<3){
      $mrez= intval($num);
    }else{
      $mrez= intval($gds);
    }
    }else{
      $mrez= intval($gds);
      }
      $grades[$i]= $mrez;
      }
return $grades;
    }

 ?>
