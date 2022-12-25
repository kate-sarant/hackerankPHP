<?php
function countingValleys($n, $s) {
    $count = 0;
    $track = 0;
    for($i = 0; $i < $n; $i++) {
        if($s[$i] == 'U') {
            $track++;
        }else {
            if($track == 0) {
                $count++;
                $track--;
            }else {
                $track--;
            }
        }
    }
    return $count;
}
echo(countingValleys($steps, $path)); ?>
