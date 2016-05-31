<?php 



$_fp = fopen("php://stdin","r");

$tarr= array();


for($i=0;$i<6;$i++){
	
	$arr = trim(fgets($_fp));
	$arr = array_map('intval', explode(' ', $arr));
	
	$tarr[$i] = $arr;
}

//print_r($tarr);

$mx = -63;

for($i=1;$i<=4;$i++){
	
	for($j=1;$j<=4;$j++){
		
		$sum = $tarr[$i][$j]+ $tarr[$i-1][$j-1]+$tarr[$i-1][$j]+$tarr[$i-1][$j+1]+ $tarr[$i+1][$j-1]+$tarr[$i+1][$j]+$tarr[$i+1][$j+1];
		if($sum > $mx){
			$mx = $sum;
		}
	}
	
}
echo $mx;
fclose($_fp);
?>


