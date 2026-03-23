<?php

// Write Function Content Here
function sum_all(...$nums){
    $sum = 0;
    foreach($nums as $num){
        if($num !== 5){
            if($num === 10){
                $num += 10;
            }
            $sum += $num;
        }
    }
    return $sum;
}
// Needed Output
echo sum_all(10, 12, 5, 6, 6, 10); // 64
echo "<br>";
echo sum_all(5, 10, 5, 10); // 40