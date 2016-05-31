<?php

function getdata($a1,$a2){
	
	$a1 = explode(" ", $a1);
	$size = $a1[0];
	$mod = $a1[1];
	
	$a2 = explode(" ", $a2);
	$tm = $a2[0]%$mod;
	
	for($i=0;$i<$size;$i++){
		$sum = $a2[$i];
		$m = ($sum)%$mod;
		if($m > $tm){
		
			$tm = $m;
		}
		
		for($j=$i+1;$j<$size;$j++){
			
			$sum = $sum+$a2[$j];
			$m = ($sum)%$mod;
			if($m > $tm){
				
				$tm = $m;
			}
			
		}
	}
	
	return $tm;
}

$t=trim(fgets(STDIN));

for($i=0;$i<(2*$t);$i++){


$arr[$i] = trim(fgets(STDIN));

}

for($i=0;$i<(2*$t);$i += 2){
	
	
$data = getdata($arr[$i],$arr[$i+1]);	

echo $data."\n";

}

?>

