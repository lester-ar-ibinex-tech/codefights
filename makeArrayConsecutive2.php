<?php

function makeArrayConsecutive2($statues) {
    sort($statues);
    $cnt = 0;
    for($i=0;$i<count($statues)-1;$i++){
        $diff = $statues[$i+1]-$statues[$i];
        $diff==1 ? :$cnt+=($diff-1); // compares difference between current and next element
    } return $cnt;
}
