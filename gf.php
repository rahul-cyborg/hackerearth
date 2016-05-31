<?php

function getdata($str,$s){

	$str = explode(" ",$str);
	
	$first = bcsub($str[0],1);
	
	$second = bcsub($str[1],1);
	
	$len = strlen($s);
	
	
	$index1 = (int)bcmod($first, $len);
		
	$index2 = (int)bcmod($second, $len);
	
	

	//echo "index1 = ".$index1." index 2 = ".$index2."\n";
	
	if($s[$index1] == $s[$index2]){
		
		echo "Yes"."\n";
	}
	else {
		
		echo "No"."\n";
	}
	
}

$str = trim(fgets(STDIN));

$t=trim(fgets(STDIN));

for($i=0;$i<$t;$i++){


	$arr[$i] = trim(fgets(STDIN));

}



for($i=0;$i<$t;$i++){

	getdata($arr[$i],$str);

}

?>
