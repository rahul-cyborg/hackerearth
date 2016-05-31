<?php 

$_fp = fopen("php://stdin","r");

$n = trim(fgets($_fp));
$arr = trim(fgets($_fp));
$arr = array_map('intval', explode(' ', $arr));
sort($arr);
$min = abs(bcsub($arr[1],$arr[0]));

for($i=2;$i<$n;$i++){
	
	$m = abs(bcsub($arr[$i],$arr[$i-1]));
	$min = min($min,$m);
}

for($i=1;$i<$n;$i++){
	
	$m = abs(bcsub($arr[$i],$arr[$i-1]));
	if($m == $min){
		echo $arr[$i-1]." ".$arr[$i]." ";
	}
}

fclose($_fp);
?>


