<?php 



$t=trim(fgets(STDIN));

$arr = array();

for($i=0;$i<$t;$i++){


	$temp = trim(fgets(STDIN));
	$temp = array_map('intval', explode(' ', $temp));
	
	$n = $temp[0];
	$sum = $temp[1];
	
	$arr[$i] = $sum." ";
	
	for($k=1;$k<=$n;$k++){
		
		$arr[$i] .= trim(fgets(STDIN))." ";
	}
	

}

for($i=0;$i<$t;$i++){
	
	$temp =  trim($arr[$i]);
	$temp = array_map('intval', explode(' ', $temp));
	$s = (int)$temp[0];
	$output = array_slice($temp, 1);
	sort($output);
	$len = count($output);
	
	//$a_s = array_sum($output);
	$flag = 0;
	
	if($s < $output[0]){
		
		echo "NO"."\n";
	}
	elseif ($s == $output[0]){
		
		echo "YES"."\n";
	}
	else {
		
		for($p=0;$p<$len;$p++){
			
			$data = $output[$p];
			
			for($m=$p+1;$m<$len;$m++){
				
				$data =$data+$output[$m];
				
				if($data == $s){
					$flag = 1;
					break;
				}
				
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
	

?>