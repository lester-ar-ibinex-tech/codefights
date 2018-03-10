<?php
/*
*	Able to output correctly but still stuck on this level since 
*	I did not pass the Execution Time Limit of 4 seconds.
*	Code needs to be optimized.
*/

function almostIncreasingSequence($sequence) {
    $orig=$sequence;
    $flag=false;
    
    for ($i=0;$i<count($orig);$i++) {
        unset($sequence[$i]);
        $tempSort = $sequence;
        sort($tempSort);
        
        $comp = array_map("comp",$sequence,$tempSort);
        if (!in_array(false, $comp) && $sequence == array_unique($sequence)) {
            $flag=true;
        }
        $sequence=$orig;
    }
    return $flag;
}

function comp($a,$b) {
    return($a==$b);
}
