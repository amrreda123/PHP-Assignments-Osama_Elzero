<?php
$num = 2;
$total = 1;

while ($num < 520) {
    echo $total . "<br>";
    $total = $total * 2 + 2;
    
    $num = $total;
}
echo "------------------------------<br>";
$num = 2;
while ($num < 520) {
    echo ($num - 1) . "<br>";
    $num = ($num * 2) + 1;
}