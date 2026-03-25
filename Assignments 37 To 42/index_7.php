<?php

$mix = [1, 2, "A", "B", "C", 3, 4];

$countNum = 0;
$countStr = 0;
foreach($mix as $item){
    gettype($item) !== "string" ? ((print $item . "<br>") . $countNum++ ): $countStr++;
}

echo "{$countNum} Numbers Printed" . "<br>";
echo "{$countStr} Letters Ignored";