<?php 

function getdata($a1,$a2,$a3){
	
	$temp = array_map('intval', explode(' ', $a1));
	$l1 = $temp[0];
	$l2 = $temp[1];
	
	if($l1 > $l2){
		
		echo "NO"."\n";
	}
	else {
		
		$flag = 1;
		
		$a2 = array_map('intval', explode(' ', $a2));
		$a3 = array_map('intval', explode(' ', $a3));
		sort($a2);
		sort($a3);
		
		$m = 0;
		while($m< $l1){
			
			if($a2[$m] > $a3[$m]){
				
				$m++;
			}
			else {
				
				$m++;
				$flag = 0;
				
			}
			
			
		}
		
		if($flag ==1){
				
			echo "YES"."\n";
		}
		else {
			echo "NO"."\n";
		}
		
	}
	
}

$t=trim(fgets(STDIN));

$arr = array();

$n = 3*$t;

for($i=0;$i<$n;$i++){

	$arr[$i] = trim(fgets(STDIN));

}

for($i=0;$i<$n;$i += 3){
	
	getdata($arr[$i],$arr[$i+1],$arr[$i+2]);
}
	

?>
