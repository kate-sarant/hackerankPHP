<?php
function saveThePrisoner($n, $m, $s) {
  return  ((($s - 1 + $m - 1) % $n) + 1);

}
// $rez = ($s>1)?($m % $n)+$s-1:($n-$s)-$m;
?>
