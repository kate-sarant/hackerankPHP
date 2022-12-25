<?php  
$s ="zzzzz";
$t ="zzzzzzz";
$k = 4;


function appendAndDelete($s, $t, $k) {
$marr= 0;
$count =strlen($s);

if(strlen($t) >strlen($s)){
  $index= 0;
  if(str_repeat($t[0],$count)== $s && $count >2){
    $marr = strlen($t)-strlen($s);
  }else{
    for($i=0 ;$i<strlen($t);$i++){
      if($s[$i]!=$t[$i]||$t[$i] == ""){
  $marr = strlen($s)+strlen($t);
   break;
 }
    }
  }
}elseif(strlen($t) ==strlen($s)){

for($i=0 ;$i<strlen($t);$i++){

  if($s[$i]!=$t[$i]){
    // how many is needed to erase.
   $myindex= $count-$i;

   //count the empties and writing .
  $marr = $myindex*2;
}
}
}else{
$index= 0;
  for($i=0 ;$i<strlen($s)+1;$i++){

    if($s[$i]!=$t[$i]||$s[$i] == ""){
     // how many is needed to erase.

//count the empties and writing .
$myindex= $count-$i;

$marr = $myindex+strlen($t) -$i;
 break;
  }
  }

}
$rez =($marr<= $k )?"Yes":"No";

     return $rez;

}
echo appendAndDelete($s, $t, $k);
 ?>
