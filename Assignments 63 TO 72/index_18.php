<?php

$title = "E&z$r0 W$b Sch00&";

$search = ["&", "$", "0"];
$replace = ["l", "e", "o"];

$finalTitle = str_replace($search, $replace, $title, $count);

echo '"' . $finalTitle . '"' . "<br>"; 
echo $count; // 7

?>