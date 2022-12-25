<?
// Hash Tables: Ransom Note
$magazine="give me one grand today night";
$note ="give one grand today";

function checkMagazine($magazine,$note) {
 $note= str_replace(" ","|",$note);
 $regx = '/'."$note".'/i';
 if(preg_match_all($regx,$magazine,$matches)){
 $note =  str_replace("|"," ",$note);
 $rez =(str_word_count($note) == count($matches[0]))?"yes":"no";

   return $rez;
}}
echo checkMagazine($magazine,$note);
     ?>
<?php foreach ($variable as $key => $value): ?>
  
<?php endforeach; ?>
