<?php

function getdata($str,$ar){

	$str = explode(" ",$str);
	
	$first = (int)$str[0];
	
	$second = (int)$str[1];
	
	if($first == $second){
		
		$reverse = strrev($first);
		
		if($first == $reverse){
			
			echo "1"."\n";
			
		}
		else {
			
			echo "0"."\n";
		}
		
	}
	else {
	
	$f = 0;
	$s = 0;
	
	for($i=0;$i<count($ar);$i++){
		
		if($ar[$i] >= $first){
			
			$f = $i;
			break;
		}
	}
	
	for($i=count($ar)-1;$i>=0;$i--){

		if($ar[$i] <= $second){
				
			$s = $i;
			break;
		}
	}
	
	echo $f.' '.$s."\n";
	$diff = $s-$f;
	
	echo ($diff+1)."\n";
	}

}

$t=trim(fgets(STDIN));

for($i=0;$i<$t;$i++){


	$arr[$i] = trim(fgets(STDIN));

}

$j = 0 ;
$garr = array();

for($i=0;$i<=100000;$i++){
	
	if($i<=9){
		
		$garr[$j] = $i;
		$j++;
	}
	else {
		
		$reverse = strrev($i);
		
		if((int)$reverse == (int)$i){

			$garr[$j] = $i;
			$j++;
			
		}

	}
}



for($i=0;$i<$t;$i++){

	getdata($arr[$i],$garr);

}

?>
