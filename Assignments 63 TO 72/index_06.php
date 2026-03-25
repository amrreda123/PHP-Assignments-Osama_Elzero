<?php

$chars = ["A", "B", "C", "D", "E"];
$char = "@@";
$zero = 0;

$output = array_merge($chars, array_fill(count($chars), count($chars), $char[$zero]));


echo "<pre>";
print_r($output);
echo "</pre>";

$output = array_pad($chars, count($chars) + count($chars), $char[$zero]);

?>