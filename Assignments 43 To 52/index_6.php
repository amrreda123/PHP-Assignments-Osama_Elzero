<?php

// Write Function Content Here
$calculate = fn($n1, $n2, $op = "a") => match($op) {
    "a", "add"      => $n1 + $n2 ,
    "s", "subtract" => $n1 - $n2,
    "m", "multiply" => $n1 * $n2,
    default         => "Unknown",
} . "<br>";
// Needed Output
echo $calculate(10, 20); // 30
echo $calculate(10, 20, "a"); // 30
echo $calculate(10, 20, "s"); // -10
echo $calculate(10, 20, "subtract"); // -10
echo $calculate(10, 20, "multiply"); // 200
echo $calculate(10, 20, "m"); // 200