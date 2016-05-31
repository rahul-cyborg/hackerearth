<?php 


$n = trim(fgets(STDIN));

$arr = trim(fgets(STDIN));

$arr = array_map('intval', explode(' ', $arr));

$min = min($arr);
$max = max($arr);

$diff = $max-$min;

echo $diff."\n";

?>
