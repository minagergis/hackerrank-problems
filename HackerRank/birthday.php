<?php

function birthday($s, $d, $m): int
{
    $segments = 0;
    for ($i = 0, $iMax = count($s)-$m; $i <= $iMax; $i++){
        $segmentSum = 0;

        for ($j = 0 ; $j < $m ; $j++){
            $segmentSum += $s[$i+$j];
        }

        if ($segmentSum === $d){
            $segments++;
        }
    }
return $segments;
}


//$arr = [1,2,1,3,2];
$arr = [1,1,1,1,1,1];
echo birthday($arr,3,2);