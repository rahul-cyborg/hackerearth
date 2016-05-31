<?php 

function getdata($arr){
	
		
	$arr = array_map('intval', explode(' ', $arr));
	
	$start = (int)$arr[0];
	$end = (int)$arr[1];
	$actualNumber = (int)$arr[2];
	
	$first = bcdiv($end, $actualNumber);
	
	$sub = bcsub($start,1);
	
	$second = bcdiv($sub, $actualNumber);
	
	$numberOfDivisors = bcsub($first,$second);

	if($numberOfDivisors >= 1 ){
	echo $numberOfDivisors."\n";
	}
	else {
		$numberOfDivisors = 0;
		echo $numberOfDivisors."\n";
	}
}

$n = trim(fgets(STDIN));

$n = (int)$n;

$arr = array(); 

for($i=0;$i<$n;$i++){
	
	$arr[$i] = trim(fgets(STDIN));
}

for($i=0;$i<$n;$i++){
	
	getdata($arr[$i]);
	
}


?>
