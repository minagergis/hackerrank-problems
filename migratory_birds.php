<?php


function migratoryBirds($arr) : int{

    $occurrenceArray = [];

    foreach ($arr as $item){

       $occurrenceArray[$item] = isset($occurrenceArray[$item]) ? $occurrenceArray[$item]+1 : 1;
    }

    return array_keys($occurrenceArray, max($occurrenceArray))[0];
}

//$arr = [1, 2, 3 ,4 ,5, 4 ,3, 2, 1 ,3 ,4];
$arr = [1 ,4, 4, 4 ,5, 3];
echo migratoryBirds($arr);