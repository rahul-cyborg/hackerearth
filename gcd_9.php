<?php 

function gcd($x,$y){
	
	if($x == $y){
		
		echo $x;
		
	}
	else {
		
		$x1 = max($x,$y) - min($x,$y);
		$y1 = min($x,$y);
		
		gcd($x1,$y1);
	}
}

$_fp = fopen("php://stdin","r");

$arr = trim(fgets($_fp));
$arr = array_map('intval', explode(' ', $arr));

$x = $arr[0];
$y = $arr[1];

gcd($x,$y);


fclose($_fp);
?>


