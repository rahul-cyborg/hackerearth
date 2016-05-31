<?php 

function getdata($arr){
	
	$arr = array_map('intval', explode(' ', $arr));
	$a = $arr[0];
	$b = $arr[1];
	$n = $arr[2];
	
	$new = array();
	
	$val = 0 ;
	
	for($i=0;$i<$n;$i++){
		
		$pow = pow(2,$i);
		$mul = $b*$pow;
		
		$val = $val+$mul;
		
		$new[$i] = $val+$a;
	}
	
	echo implode(" ",$new)."\n";
	
}

$_fp = fopen("php://stdin","r");

$n = trim(fgets($_fp));

$arr = array();

for($i=0;$i<$n;$i++){
	
	$arr[$i] =  trim(fgets($_fp));
}

for($i=0;$i<$n;$i++){
	
	getdata($arr[$i]);
}

fclose($_fp);
?>


