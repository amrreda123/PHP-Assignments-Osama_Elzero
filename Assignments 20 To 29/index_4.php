<?php
$a = 10;
$b = 20;
$c = 15;

echo var_dump($a < $b) . "<br>"; // True
echo var_dump($c > $a) . "<br>"; // True
echo var_dump($a != $b) . "<br>"; // True
echo var_dump($a <= $b) . "<br>"; // True
echo var_dump($a <= $c) . "<br>"; // True
echo var_dump($a <> $c) . "<br>"; // True
echo var_dump(gettype($a) == gettype($b)) . "<br>"; // True
echo var_dump(gettype($a) === gettype($b)) . "<br>"; // True
echo var_dump(gettype((float) $a) !== gettype($b)) . "<br>"; // True