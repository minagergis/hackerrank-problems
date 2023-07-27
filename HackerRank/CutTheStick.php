<?php

namespace HackerRank;

class CutTheStick
{
    public function cutTheSticks($sticks): array
    {
        $jj  = [];
        $len = count($sticks);
        for ($j = 0; $j <= 3; $j++) {
            $min   = min($sticks);
            $count = 0;

            for ($i = 0; $i < $len; $i++) {
                if (isset($sticks[$i])) {
                    $sticks[$i] -= $min;
                    $count++;
                    if ($sticks[$i] <= 0) {
                        unset($sticks[$i]);
                    }
                }
            }

            $jj[] = $count;
        }

        return $jj;
    }
}
