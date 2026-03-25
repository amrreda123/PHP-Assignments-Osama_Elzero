<?php
// Method One
echo gettype(100); // Integer
echo '<br>';
// Method Two
echo var_dump(100); // int(100)
// Method Three => Optional
echo '<br>';
echo get_debug_type(100); // integer
echo '<br>';
echo "Is it integer? " . (is_int(100) ? " Yes, it is Integer" : "No");
?>