<?php


// 1st way
$n = '0';
// function sumXor($n) {
// $nums=array();
//   for($x=0;$x<=$n;$x++){
//
//   $xor= $n^$x;
//   $sum = $n + $x;
//     if($sum ==$xor &&( $x<= $n)){
//       array_push($nums,$x);
//     }
//   }
//    return  count($nums);
// }
// print_r(sumXor($n));

// 2nd way
function sumXor($n) {

$result = 1;
if($n>0){
$code = decbin($n);
for($i=0;$i<= strlen($code);$i++){
if($code[$i] == "0"){
$result=$result *2;
}

}
}
return $result;
}
print_r(sumXor($n));
 ?>
