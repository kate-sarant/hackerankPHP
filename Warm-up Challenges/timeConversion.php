<?php
$s ="12:05:45AM";

function timeConversion($s){

  if(preg_match('/^12/',$s) && substr($s,-2,strlen($s)) == "AM"){
  $newHour= preg_replace('/^12/',"00",$s);
}elseif(!preg_match('/^12/',$s) && substr($s,-2,strlen($s)) == "AM"){
  $newHour=$s;
}
  elseif(substr($s,-2,strlen($s)) == "PM"&& (!preg_match('/^12+/',$s))){
    $count = substr($s,0,2)+12;
  $newHour= preg_replace("/^[0-9]{2}/",$count,$s);
}else{
    $newHour=$s;
}
  $rez= preg_replace('/[A-Z]+$/'," ",$newHour);
  return $rez;
}
print_r(timeConversion($s));


 ?>
