<?php
namespace HackerRank;

function countApplesAndOranges($s, $t, $a, $b, $apples, $oranges) {

    $applesCount = 0;
    $orangeCount = 0;

    foreach ($apples as $apple){
        if ($a + $apple >= $s && $a + $apple <= $t){
            $applesCount++;
        }
    }

    foreach ($oranges as $orange){
        if ($b + $orange >= $s && $b + $orange <= $t){
            $orangeCount++;
        }
    }

    echo $applesCount . '\n' .$orangeCount ;
}

