<?php


function getdata($n){
	
	$sum = 0;
	for($i=1;$i<=$n;$i++){
		
	$t = islucky($i);
	
	if($t == 1){
		
		$sum = $sum+$i;
	}
	}
	
	return $sum;
}

function islucky($n){
	
	
	$count = 0;
	while($n>=1){
		
		$temp = $n%2;
		$n = $n/2;
		
		if($temp == 1){
			
			$count++;
		}
		
	}
	
	if($count == 2){
		
		return 1;
	}
	else {
		return 0;
	}
}

$t=trim(fgets(STDIN));

for($i=0;$i<$t;$i++){


$arr[$i] = trim(fgets(STDIN));

}

for($i=0;$i<$t;$i++){
	
//$data = $arr[$i];	
$data = getdata($arr[$i]);	

echo $data."\n";

}

?>

