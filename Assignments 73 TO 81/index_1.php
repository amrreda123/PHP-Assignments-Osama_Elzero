<?php

    $min = 10;
    $max = 20;

    echo rand($min + 1, $max - 1); 

    echo "<br>";

    echo mt_rand($min + 1, $max - 1);

?>