<?php

function shapeArea($n) {
    $base = $n+($n-1);
    $temp=$base;
    while($temp!=1){
        $temp = $temp-2;
        $y += $temp;
    }
    return $base + (2*$y);
}
