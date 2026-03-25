<?php
$file_path = "video.mp4"; 
if (file_exists($file_path)) {
    $size_in_bytes = filesize($file_path);
    $size_in_kb = round($size_in_bytes / 1024);
    $size_in_mb = round($size_in_bytes / 1024 / 1024);
    echo "Size In Megabyte Is " . $size_in_mb . "<br>";
    echo "Size In Kilobyte Is " . $size_in_kb;
} else {
    echo "Not Found";
}

?>