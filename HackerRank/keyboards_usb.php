<?php


//Unoptimized (O[M*N])

function getMoneySpent($keyboards, $drives, $b)
{
    $combinations = [];
    for ($iK = 0, $iKMax = count($keyboards); $iK < $iKMax; $iK++) {
        if ($keyboards[$iK] >= $b) {
            continue;
        }
        for ($iD = 0, $iDMax = count($drives); $iD < $iDMax; $iD++) {
            if ($keyboards[$iK] + $drives[$iD] > $b) {
                continue;
            }
            $combinations[] = $keyboards[$iK] + $drives[$iD];
        }
    }

    return count($combinations) ? max($combinations) : -1;
    ;
}

//Optimized (O[N*Log(N)])
function getMoneySpentV2($keyboards, $drives, $b)
{
    sort($keyboards); // Sort keyboards array in ascending order
    sort($drives); // Sort drives array in ascending order

    $maxSpent = -1; // Initialize the maximum amount spent to -1 (indicating no valid combination found yet)

    $iK = count($keyboards) - 1; // Index for traversing keyboards from the end
    $iD = 0; // Index for traversing drives from the beginning

    while ($iK >= 0 && $iD < count($drives)) {
        $totalCost = $keyboards[$iK] + $drives[$iD];

        if ($totalCost <= $b) {
            // Update the maximum amount spent if a valid combination is found
            $maxSpent = max($maxSpent, $totalCost);
            $iD++; // Move to the next drive to see if we can find a better combination
        } else {
            // The current combination exceeds the budget 'b', try a cheaper keyboard
            $iK--;
        }
    }

    return $maxSpent;
}


$result = getMoneySpent([40, 50, 60], [5, 8, 12], 60);

echo $result;
