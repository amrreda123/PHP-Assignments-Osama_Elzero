<?php

$parent = "Programming";
$child = "Programming/PHP";

$mode = 0711; 

if (!file_exists($parent)) {
    mkdir($parent, $mode);
}
if (!file_exists($child)) {
    mkdir($child, $mode);
}

if (file_exists($child)) {
    rmdir($child);
    echo "Directory $child Removed" . "<br>";
}

if (file_exists($parent)) {
    rmdir($parent);
    echo "Directory $parent Removed";
}

?>