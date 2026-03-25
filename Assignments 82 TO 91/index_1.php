<?php

$drives = ["C:/", "D:/"];

foreach ($drives as $drive) {
    if (file_exists($drive)) {
        $space_in_bytes = disk_total_space($drive);
        $space_in_terabytes = $space_in_bytes / pow(1024, 4);
        echo number_format($space_in_terabytes, 2) . " Terabyte" . "<br>";
    }
}

?>