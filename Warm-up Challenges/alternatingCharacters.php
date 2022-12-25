<?php
$s= "ABACCAABBA";
function alternatingCharacters($s) {

    for($i=0;$i<strlen($s);$i++){

if($s[$i] == $s[$i+1]){
  $s[$i]= '2';
};
  }
$new_string= preg_replace('/|[^A-Z]|/', '', $s);
  return $new_string;

}
echo (alternatingCharacters($s)) ;


 ?>
