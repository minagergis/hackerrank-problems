<?php

function getTotalX($a, $b) {
    $minBarrier = $a[count($a)-1];
    $maxBarrier = $b[0]+1;
    $result = 0;

    for ($i = $minBarrier; $i <= $maxBarrier ;$i++) {
        $isFactor = true;
        foreach ($a as $ele){
            if ($i % $ele !== 0){
                $isFactor = false;
            }
        }

        foreach ($b as $ele){
            if ($ele % $i !== 0){
                $isFactor = false;
            }
        }

        if ($isFactor === true){
            $result++;
        }
    }

    return $result;
}