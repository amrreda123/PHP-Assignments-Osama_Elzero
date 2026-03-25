<?php

// 1. Document Root
echo $_SERVER['DOCUMENT_ROOT'] . "<br>"; 

// 2. Server Name
echo $_SERVER['SERVER_NAME'] . "<br>"; 

// 3. System Root
echo $_SERVER['SystemRoot'] . "<br>"; 

// 4. Open SSL Configuration
echo $_SERVER['OPENSSL_CONF'] . "<br>";

echo "Your IP address is: " . $_SERVER['REMOTE_ADDR'];

echo "<pre>";
print_r($_SERVER);
echo "</pre>";

?>