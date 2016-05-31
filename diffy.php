<?php

function printresult($arr){
	
	$arr = array_map('intval', explode(' ', $arr));
	
	$size = (int)$arr[0];
	
	$sum = (int)array_sum($arr);
	
	$sum = $sum-$size;
	
	if($sum%2 == 0){
		
		echo "Yes"."\n";
	}
	else {
		
		echo "No"."\n";
	}
}

$n=trim(fgets(STDIN));

for($i=0;$i<$n;$i++){
	
$t = trim(fgets(STDIN));
$arr[$i]=$t;

}

for($i=0;$i<$n;$i++){

	printresult($arr[$i]);

}

?>
