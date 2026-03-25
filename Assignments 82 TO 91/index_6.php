<?php
$file_name = "elzero.txt";

$handle = fopen($file_name, "r");
echo rtrim(fgets($handle)). " " . rtrim(fgets($handle)). "<br>";
fclose($handle); 


$lines_array = file($file_name);
echo trim($lines_array[0]) . " " . trim($lines_array[1]) . "<br>";


$content = file_get_contents($file_name);
$lines = explode("\n", $content); 
echo trim($lines[0]) . " " . trim($lines[1]) . "<br>";


$lines_limited = explode(PHP_EOL, $content, 3); 
echo $lines_limited[0] . " " . $lines_limited[1] . "<br>";

?>