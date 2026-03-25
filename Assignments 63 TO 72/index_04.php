<?php
$nums = [10, 20, 30];

$result_1 = array_reduce($nums, function($carry, $item) {
    return $carry + $item;
}, 0);

echo $result_1 . "<br>";

$result_2 = array_sum($nums);

echo $result_2 . "<br>";
?>