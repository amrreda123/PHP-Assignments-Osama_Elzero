<?php

$nums = [5, 10, 20, 5, 30, 40];

$result = array_sum(array_filter($nums, function($n) {
    return $n != 5;
}));

echo $result; 

$result = array_reduce($nums, function($carry, $item) {
    return $item != 5 ? $carry + $item : $carry;
}, 0);

echo $result;
?>