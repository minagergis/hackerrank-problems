<?php

function bonAppetit($bill, $k, $b) {

    unset($bill[$k]);
    $shouldPay = array_sum($bill)/2;
    if ( $shouldPay === $b){
        echo 'Bon Appetit';
    }else{
        echo  $b - $shouldPay;
    }

}