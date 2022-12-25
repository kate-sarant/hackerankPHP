<?php
include 'exampletest.txt';
function isBalanced($s) {

$samples =['{','(','['];
$samplesEnds =['}',')',']'];

$rez = "YES";
$box=[];
$s= trim($s);

if(strlen($s)%2 !=0){
  return "NO" ;
}else{
  for($i =0;$i<=strlen($s);$i++){
  // echo 'step1';
  if($i == strlen($s)&& $box != null ){
  $rez = 'NO';
    break;
  }
  if(in_array($s[$i],$samples)){
      array_push($box,$s[$i]);

      if(strlen($s) == count($box)){

          $rez = 'NO';
          break;
      }
  }

  if(in_array($s[$i],$samplesEnds)){
    if (end($box)== '{' && $s[$i] =='}'||
     end($box)== '[' && $s[$i] ==']'||
     end($box)== '(' && $s[$i] ==')' )
     {
          array_pop($box);

  }else{
    $rez = "NO";
    break;
  }

  }
    }
  }

return $rez;

}

$file = './BalancedBrackets/exapletest.txt';
$testCases = './BalancedBrackets/testCase.txt';
$lines = file($file);
$testCasesF=file($testCases);


// foreach ($lines as $key =>$value) {
  for($i=0;$i<count($lines);$i++){
    // echo '<br>';

$k = isBalanced($lines[$i]);
if($i == 15){

  // echo $lines[$i];
  // echo $k;
}
 ?>
