<?php
$chars = ["E", 1, 2, "l", "z", "E", "R", "o"];
$lettersOnly = [];

foreach ($chars as $char) {
    if (is_string($char))  $lettersOnly[] = $char; 
}

$result = implode("", $lettersOnly);

echo ucfirst(strtolower($result)); 
