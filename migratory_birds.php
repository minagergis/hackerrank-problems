<?php

function migratoryBirds($arr) {
    $totals = array_count_values ($arr);
    asort($totals);
    $max = end($totals);
    $filtered = array_filter($totals, function($i) use ($max){ return ($i === $max); });
    ksort($filtered);
    return key($filtered);

}
