<?php

$nums = [1, 2, 3, 4, 5, 6];

uksort($nums, function() {
    return rand(-1, 1); 
});

echo "<pre>";
print_r($nums);
echo "</pre>";

?>