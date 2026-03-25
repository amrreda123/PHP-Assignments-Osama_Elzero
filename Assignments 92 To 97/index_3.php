<?php

date_default_timezone_set("Africa/Cairo");

$date = "1990-10-01";

$seconds = strtotime($date);

$days = $seconds / (24 * 60 * 60);

$years = $days / 365.25;

echo "From Epoch Time Till $date Is Approximately " . round($days, 1) . " Days<br>";
echo "From Epoch Time Till $date Is Approximately " . round($years, 1) . " Years";