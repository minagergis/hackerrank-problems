<?php

//function countingValleys(int $steps, string $path) {
//    $level = 0;
//   $count = 0;
//   $inValley = false;
//    for($i=0;$i<$steps;$i++){
//
//        if ($path[$i] == 'U'){
//           $level++;
//        }else{
//            $level--;
//        }
//
//        if ($level < 0 && !$inValley){
//            $inValley=true;
//        }
//
//        if ($inValley && $level >= 0){
//$inValley = false;
//            $count++;
//        }
//
//    }
//
//    return $count;
//}

function catAndMouse($x, $y, $z)
{

    if (abs($x - $z) == abs($y - $z)) {
        return 'Mouse C';
    }

    if (abs($x - $z) > abs($y - $z)) {
        return 'Cat B';
    }

    return 'Cat A';
}


$mina = catAndMouse(1, 2, 3);

echo $mina;
