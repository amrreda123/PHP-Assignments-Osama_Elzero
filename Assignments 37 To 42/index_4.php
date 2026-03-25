<?php

$start = 10;
$end = 0;
$stop = 3;

for ($i = $start; $i > $end && $i !== $stop; $i--) { 
    echo ($i < 10 ? "0" . $i : $i) . "<br>";
}
echo "-----------------" . "<br>";
for ($i = $start; $i > $end; $i--) {
    echo ($i < $start ? "0" . $i : $i) . "<br>";
    if ($i === $stop) break;
}