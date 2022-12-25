<?php
function makingAnagrams ($s1, $s2) {
    $letters_1 = array_flip (str_split ("abcdefghijklmnopqrstuvwxyz"));
    foreach ($letters_1 as $i => $letters_1_i) $letters_1[$i] = 0;
    $letters_2 = $letters_1;
    for ($i = 0; isset ($s1[$i]); $i++) ++$letters_1[$s1[$i]];
    for ($i = 0; isset ($s2[$i]); $i++) ++$letters_2[$s2[$i]];
    $deletions = 0;
    foreach ($letters_1 as $i => $letters_1_i)
        $deletions += abs ($letters_1[$i] - $letters_2[$i]);
    return $deletions;
}

 ?>
