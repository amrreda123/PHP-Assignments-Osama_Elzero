<?php

$start = 0;
$mix = [1, 2, 3, "A", "B", "C", 4];

for($i = $start + 1; $i < sizeof($mix); $i++){
    echo (gettype($mix[$i]) !== "string" ? $mix[$i]  . "<br>": "");
}