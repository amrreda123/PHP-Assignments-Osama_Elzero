<?php
$a = "10";

 echo +$a . "<br>";
 echo gettype(+$a) . "<br>";
 echo (int)$a . "<br>";
 echo gettype((int)$a) . "<br>";
 echo $a + 0 . "<br>";
 echo gettype($a + 0) . "<br>";
 settype($a,"integer");
 echo $a . "<br>";
 echo gettype($a) . "<br>";
?>