<?php

$friends = [
  "AG" => "Ahmed Gamal",
  "OM" => "Osama Mohamed",
  "MG" => "Mahmoud Gamal",
  "AS" => "Ahmed Samy",
  "FA" => "Farid Ahmed",
  "SM" => "Sayed Mohamed"
];

$lower_keys_friends = array_change_key_case($friends, CASE_LOWER);

echo '<pre>';
print_r(array_chunk($lower_keys_friends, 2, True));
echo '</pre>';

