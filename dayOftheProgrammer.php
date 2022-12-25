<?php

// 'find:256th day
// Julian : 1700 to 1917; February 14th was the 32nd
// Gregorian starts : 1919 ;
//
// ///in Julian calendar leap years are divisible by 4;

// in the Gregorian calendar,
// leap years are either of the following:
//
// Divisible by 400.
// Divisible by 4 and not divisible by 100.'


function dayOfProgrammer($year) {
  //find the month.
  $total_months = 12 - floor((365-256)/30);

if( $year<=1919){
  for($i=1;$i< $total_months;$i++){
      $k = cal_days_in_month(CAL_JULIAN,$i,$year);

//in 1918, when the next day after January 31st was February 14th.
    if($year == 1918 & $i== 2){
    $k = $k-14;
    }
    $days += $k;
  }
}else{
  for($i=1;$i< $total_months;$i++){
    $k = cal_days_in_month(CAL_GREGORIAN,$i,$year);
    $days += $k;

  }
}
$date=date_create();
$calDay =256-$days;
date_date_set($date,$year,$total_months,$calDay);

return date_format($date,"d.m.Y");

}


echo dayOfProgrammer(1918);



 ?>
