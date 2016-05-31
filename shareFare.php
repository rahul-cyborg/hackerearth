<?php 

$case = trim(fgets(STDIN));

$count = $case;

$out = array();
$p = 0;

while($case >= 1){
	
	$arr = trim(fgets(STDIN));
	$arr = array_map('intval', explode(' ', $arr));
	$n = $arr[0];
	$q = $arr[1];
	
	$name = array();
	
	for($i=0;$i<$n;$i++){
		
		$data = trim(fgets(STDIN));
		$name[$data] = 0;
	}
	
	while($q >= 1){
		
		$temp = trim(fgets(STDIN));
		$amt = trim(fgets(STDIN));
		
		$M = trim(fgets(STDIN));
		
		$div = $M+1;
		$new_amt = $amt/$div;
		$new_amt = floor($new_amt);
		
		$bl = $new_amt*$M;
		$name[$temp] = $name[$temp]+$bl;
		
		for($k=0;$k<$M;$k++){
			
			$t1 = trim(fgets(STDIN));
			$name[$t1] = $name[$t1]-$new_amt;
			
		}
		
		$q--;
	}
	
	$out[$p] = $name;
	$p++;
	
	$case--;	
}

for($i=0;$i<$count;$i++){
	
	$ar = $out[$i];
	
	foreach ($ar as $key => $value) {
		
		if($value < 0){
			
			$v = abs($value);
			
			echo $key." owes ".$v."\n";
		}
		elseif ($value > 0){
			
			echo $key." is owed ".$value."\n";
		}
		else {
			
			echo $key." neither owes nor is owed"."\n";
		}
	}
}

?>