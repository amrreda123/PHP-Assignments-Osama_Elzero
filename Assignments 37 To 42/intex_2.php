<?php
$index = 0;
$i = $index + 2; 
echo "--- While Loop ---<br>";
while ($i <= 20) {
    echo $i . "<br>";
    $i += 2;
}

$index = 0;
echo "--- For Loop ---<br>";
for ($i = ($index + 2); $i <= 20; $i += 2) { 
    echo $i . "<br>";
}

$index = 0;
$i = $index + 2;
echo "--- Do While Loop ---<br>";
do {
    echo $i . "<br>";
    $i += 2;
} while ($i <= 20);