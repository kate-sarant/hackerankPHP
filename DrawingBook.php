<?php
$n = 6;
$p =5;
function pageCount($n, $p) {

    if(($n-$p == 1 && $n%2 !==0  )|| $p == $n){
        return 0;
    }else{
      //index of the page from the start .
      $start = floor($p/2);
//index of the page from the end .
      $end = floor(($n/2)-$p/2);
    $end = ($end <=0)?1:$end;
    $pages = [$start,floor($end)];
    
    return min($pages);

    }
}
print_r(pageCount($n,$p));
 ?>
