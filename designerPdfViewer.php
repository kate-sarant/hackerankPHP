<?php
function designerPdfViewer($h, $word) {
    foreach (range("a", "z") as $key => $char) {
    for($i=0;$i<= strlen($word);$i++){
      if($word[$i] == $char){
        if($maxChar< $h[$key]){
          $maxChar = $h[$key];
        }
      }
    }
}

return $maxChar*1*strlen($word);

}
 ?>
