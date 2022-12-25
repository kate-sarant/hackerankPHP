<?php

echo "<br>";

$s = 'saveChangesInTheEditor';

function camelcase($s) {
  $count =0;
  $new_string= preg_match('/^[a-z]/',$s,$matches);
  if(  $new_string ){
    $count = $count+1 ;
  }
for($i =0; $i < strlen($s); $i++){
$string = preg_match_all('/[A-Z]/',$s[$i],$matches);
  if($string){
    $count = $count+1 ;

  }

}

return $count;
}

echo camelcase($s) ;

 ?>
