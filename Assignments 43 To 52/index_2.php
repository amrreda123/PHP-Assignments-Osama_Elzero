<?php

// Write Function Content Here
function get_arguments(...$arguments){
        $all = "";
        foreach($arguments as $ar){
            $all .= $ar . " ";
        }
        return $all;
}
// Needed Output
echo get_arguments("Hello", "Elzero", "Web", "School"); // Hello Elzero Web School
echo "<br>";
echo get_arguments("I", "Love", "PHP"); // I Love PHP

