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
	$len = count($output);
	
	$flag = 0;
	
		$csum =$output[0]; 
		
		$start = 0;
		
		for($p=1;$p<=$len;$p++){
			
		while($csum > $s && $start < $p){
		
			$csum = $csum-$output[$start];
			$start++;
			
		}
		
		if($csum == $s){
		
		$flag =1;	
			
		}
		if($p<$len){
		$csum = $csum+$output[$p];
		}
		
		}
		
		if($flag ==1){
			
			echo "YES"."\n";
		}
		else {
		  echo "NO"."\n";
		}
	
	
}
	

?>