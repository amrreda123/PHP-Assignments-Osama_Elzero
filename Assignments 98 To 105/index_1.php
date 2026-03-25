<?php

$expire_time = strtotime("+2 months +5 days");

setcookie("site[layout]", "boxed", $expire_time, "/");
setcookie("site[font]", "Swat", $expire_time, "/");
setcookie("site[color]", "blue", $expire_time, "/");

?>