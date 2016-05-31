<?php


$t=trim(fgets(STDIN));

$alpha = array();

$alpha[0] = 6;
$alpha[1] = 2;
$alpha[2] = 5;
$alpha[3] = 5;
$alpha[4] = 4;
$alpha[5] = 5;
$alpha[6] = 6;
$alpha[7] = 3;
$alpha[8] = 7;
$alpha[9] = 6;

$sum = 0;

for($i=0;$i<strlen($t);$i++){
		
	$sum = $sum+$alpha[$t[$i]] ;
}

echo $sum;


?>
