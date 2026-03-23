<?php

$friends = [
  "Ahmed Gamal" => "AG",
  "Osama Mohamed" => "OM",
  "Mahmoud Gamal" => "MG",
  "Ahmed Samy" => "AS"
];

$flipped = array_flip($friends);

$lowered = array_change_key_case($flipped, CASE_LOWER);

$output = array_reverse($lowered, true);

echo "<pre>";
print_r($output);
echo "</pre>";

$output = array_reverse(array_change_key_case(array_flip($friends), CASE_LOWER), true);

?>