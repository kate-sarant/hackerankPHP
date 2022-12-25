<?php

$af =[12,14,34];
$bf =[12,84,33];
function compareTriplets($a, $b) {
$Alice =0;
$bob =0;
for($l= 0 ;$l<count($a);$l++){
if($a[$l]> $b[$l]){
  $Alice+=1;
}elseif($a[$l]<$b[$l]){
  $bob+=1;
}else{
  $Alice +=0;
  $bob +=0;
};

}

print_r(array($Alice,$bob));
 ?>
