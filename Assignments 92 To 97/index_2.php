<?php

date_default_timezone_set("Africa/Cairo");

echo '"' . date_default_timezone_get() . '"' . "<br>";

$date = "2005-10-02";
$d = date_create($date);
date_modify($d, "+15 hours +15 minutes +15 seconds");

echo '"' . date_format($d, "Y, F, l 'dS' H:i:s") . '"';