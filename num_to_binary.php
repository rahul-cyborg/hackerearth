<?php 

function numtobinary($n){
	
	$i = 0;
	$arr = array();
	
	while($n >= 1){
	
		$temp = $n%2;
		$arr[$i] = $temp;
		$i++;
		$n = $n/2;
	}
	
	for($j=$i-1;$j>=0;$j--){
	
		echo $arr[$j];
	}
	echo "\n";
}

$_fp = fopen("php://stdin","r");

$k = trim(fgets($_fp));

for($i=0;$i<$k;$i++){
	
	$arr[$i] = trim(fgets($_fp));
	
}

for($i=0;$i<$k;$i++){

	numtobinary($arr[$i]);

}

fclose($_fp);
?>


