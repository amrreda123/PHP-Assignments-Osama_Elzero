<?php
// Write Function Content Here
$greet1 = function($name)  {
  return "Hello $name";
};
$greet2 = fn($name) => "Hello $name";
// Needed Output
echo $greet1("Osama"); // Greetings