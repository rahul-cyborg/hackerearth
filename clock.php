<?php 

$time = trim(fgets(STDIN));

$time_in_24_hour_format  = date("H:i:s", strtotime($time));

echo $time_in_24_hour_format;

?>