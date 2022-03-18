<?php

function breakingRecords($scores): array
{
    $scores = array_values(array_unique($scores));
    $scoreBreakingRecord = [0,0];
    $topScore = max($scores[0], $scores[1]);
    $minScore = min($scores[0],$scores[1]);
    $iMax = count($scores)-1;
    for ($i = 0; $i < $iMax; $i++){


        if ($scores[$i+1] > $scores[$i] && $scores[$i+1] >= $topScore){
            $scoreBreakingRecord[0]++;
            $topScore = $scores[$i+1];
        }

        if ($scores[$i+1] < $scores[$i] && $scores[$i+1] <= $minScore){
            $scoreBreakingRecord[1]++;
            $minScore = $scores[$i+1];

        }
    }

    return $scoreBreakingRecord;

}


