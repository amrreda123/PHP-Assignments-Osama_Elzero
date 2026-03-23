<?php



$friends = ["Osama", "Ahmed", "Sayed", "Ibrahim"];


echo $friends[rand(0, count($friends) - 1)];
echo "<br>";
echo $friends[array_rand($friends)];

?>