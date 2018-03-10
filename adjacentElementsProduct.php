<?php

function adjacentElementsProduct($inputArray) {
    $tempArr = $inputArray;
    rsort($tempArr);
    // retrieve the LOWEST possible integer from the pool
    $max = $tempArr[count($tempArr)-1] * $tempArr[0];
    
    for($i=0;$i<count($inputArray)-1;$i++) {
        $temp = $inputArray[$i]*($inputArray[$i+1]);
        if($max < $temp) {
            $max = $temp;
        }
    }
    return $max;
}
