<?php

$str = "Elzero Web School";
$e = "e";
$o = "O";
$four = 4;

echo substr_count($str, $e, $four + $four); // 1
echo substr_count($str, strtolower($o), $four + $four); // 2