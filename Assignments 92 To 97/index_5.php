<?php

date_default_timezone_set("Africa/Cairo");

echo time() . "<br>"; 

echo strtotime("now") . "<br>";

$d = date_create();
echo date_format($d, "U") . "<br>"; 

echo (int)microtime(true) . "<br>";