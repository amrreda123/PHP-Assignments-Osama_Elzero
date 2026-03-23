<?php

$mix = ["A", "C", "B", 1, 100, 3, 2, 6, 5, 7];

$filtered = array_filter($mix, function($item) {
    return is_numeric($item) && $item % 2 !== 0;
});

sort($filtered);

echo "<pre>";
print_r($filtered);
echo "</pre>";

?>