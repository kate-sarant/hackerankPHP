<?php

$s1 ="hitcwvrtvizzztsecgtezzitwhgcbvesrtgwijrvbihsctwvigr";
$s2 ="btbbisgewzevjgsessiebrstirztjtwgzzgevweigiccjzswecb";
// me regex
function twoStrings($s1, $s2) {
    $chars = str_split($s1);
    // $chars2 = str_split($s2);

    $myreturn = "";
$count=0;
// if(in_array($chars[$j],$chars2))
    for($j=0;$j<count($chars);$j++){
      $pat ='/'.$chars[$j].'/';
      // echo $pat;
      if(preg_match($pat,$s2)){
            $count =$count+1;
      }
  }
  if($count>0){
    $myreturn ='YES';
  }else{
    $myreturn ='NO';
  }

    echo  $myreturn;

}
//
echo twoStrings($s1, $s2);


 ?>
