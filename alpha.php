<?php

function getdata($str,$ar){
	
	$len = strlen($str);
	
	if($len < 26){
		
		echo "NO"."\n";
	}
	else {
		
		for($i=0;$i<$len;$i++){
			
			$ar[$str[$i]] = 0;
		}
		
		$sum = array_sum($ar);
		
		if($sum == 0){
			
			echo "YES"."\n";
		}
		else {
			
			echo "NO"."\n";
		}
	}
	
	
}


$alpha = array();

$t=trim(fgets(STDIN));

for($i=0;$i<$t;$i++){


$arr[$i] = trim(fgets(STDIN));

}

for($j=97;$j<=122;$j++){
	
	$char = chr($j);
	$alpha[$char] = 1;
}

	
for($i=0;$i<$t;$i++){

getdata($arr[$i],$alpha);

}


?>
