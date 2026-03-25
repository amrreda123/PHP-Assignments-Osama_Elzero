<?php

setcookie("site[layout]", "", time() - 3600, "/");

echo "<pre>";
print_r($_COOKIE['site']);
echo "</pre>";