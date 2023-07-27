<?php
namespace HackerRank;

class Sock{
    public function sockMerchant($n,$ar): int
    {
        $occ = [];
        $pairsCount = 0;

        for ($i = 0 ; $i< $n ; $i++){
            $item = $ar[$i];
            $occ[$item] = isset($occ[$item]) ? $occ[$item]+1 : 1;
            if ($occ[$item] === 2){
                $pairsCount++;
                unset($occ[$item]);
            }
        }

        return $pairsCount;
    }
}
