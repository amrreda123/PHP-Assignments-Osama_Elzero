<?php

$codes = ["H", "C", "J"];
$means = ["HTML", "CSS", "JavaScript"];

$combined = array_combine($codes, $means);

$output = array_change_key_case($combined, CASE_LOWER);

echo "<pre>";
print_r($output);
echo "</pre>";

?>