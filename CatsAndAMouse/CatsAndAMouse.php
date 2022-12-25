<?php

function catAndMouse($x, $y, $z) {
  $a =(abs($z-$x) < abs($z-$y))?"Cat A":(abs($z-$x) > abs($z-$y) ?"Cat B":"Mouse C");

return $a ;
}

 $file = "./testCats.txt";
  $fileCase = "./viewCase.txt";
 $lines = file($file);
 $linesCase = file($fileCase);


// echo $test;
for($i=0;$i<count($lines);$i++){
 $test = explode(" ",$lines[$i]);
 // print_r($test);
echo $linesCase[$i].'<br>';
$x = $test[0];
$y = $test[1];
$z = $test[2];

  echo catAndMouse($x,$y,$z)."case: ".$linesCase[$i] ;
    echo "<br>";
}
 // $test = explode(" ",$lines);
// echo $test;
 ?>
//exei kena!
