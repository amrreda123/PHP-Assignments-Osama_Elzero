<?php

echo "<pre>";
print_r($_COOKIE);
echo "</pre>";

if (isset($_COOKIE['site'])) {
    echo '"Your Color Is ' . $_COOKIE['site']['color'] . ' And Your Font Is ' . $_COOKIE['site']['font'] . '"';
}

?>