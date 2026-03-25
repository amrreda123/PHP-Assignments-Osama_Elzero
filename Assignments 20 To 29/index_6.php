<?php

$a = "Elzero";
$b = "Web";
$c = "School";

// Method One
$d = "$a $b $c";
echo $d . "<br>";

// Method Two
$d = $a . " " . $b . " " . $c . " ";
echo $d . "<br>";

// Method Three
$d = "{$a} {$b} {$c}";
echo $d . "<br>";

// Method Four
$d = $a . " ";
$d .= $b . " ";
$d .= $c;
echo $d . "<br>";

$d = join(" ", [$a, $b, $c]);
echo $d; // Elzero Web School

?>