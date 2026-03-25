<?php

$file_name = "elzero.txt";

$content = file_get_contents($file_name);
ECHO $content . "<BR>";
$new_content = str_replace("Osamaa", "Elzero", $content);

file_put_contents($file_name, $new_content);

echo file_get_contents($file_name);
?>