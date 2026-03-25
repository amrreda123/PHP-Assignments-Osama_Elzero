<?php

$help_num = 4;
$nums = [2, 4, 5, 6, 10];

foreach($nums as $intex => $value){
    $otherValue = $nums[$help_num - $intex];
    echo "$value + $otherValue = " . $value + $otherValue . "<br>";
}