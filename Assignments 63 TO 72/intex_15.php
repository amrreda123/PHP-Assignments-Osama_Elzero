<?php
$chars = ["o", "r", "e", "z", "l", "E"];

$reversed = array_reverse($chars);

echo implode("", $reversed);

$result = array_reduce($chars, function($carry, $item) {
    return $item . $carry; 
});

echo $result;


echo join(array_reverse($chars));