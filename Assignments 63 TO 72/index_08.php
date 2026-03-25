<?php
$chars = ["A", "B", "C"];

$chars[] = "D";

echo "<pre>";
print_r($chars);
echo "</pre>";

$chars = array_merge($chars, ["D"]);

echo "<pre>";
print_r($chars);
echo "</pre>";

array_splice($chars, count($chars), 0, "D");

echo "<pre>";
print_r($chars);
echo "</pre>";

$chars = array_replace($chars, [3 => "D"]);

echo "<pre>";
print_r($chars);
echo "</pre>";
