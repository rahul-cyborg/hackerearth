<?php 


function getdata($arr){
	
	$arr = array_map('intval', explode(' ', $arr));
	
	rsort($arr);
	
	echo implode(" ",$arr)."\n";
	
}

$n = trim(fgets(STDIN));

$n = (int)$n;

$arr = array(); 

for($i=0;$i<(2*$n);$i++){
	
	$arr[$i] = trim(fgets(STDIN));
}

for($i=0;$i<(2*$n);$i=$i+2){
	
	getdata($arr[$i+1]);
	
}


?>
