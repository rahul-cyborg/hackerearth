<?php 

// you can write to stdout for debugging purposes, e.g.
// print "this is a debug message\n";

function solution($N) {

$N = bcpow('11', $N);
$N = substr_count($N, '1');
return $N;

}

$N = trim(fgets(STDIN));


echo  solution($N);


?>
