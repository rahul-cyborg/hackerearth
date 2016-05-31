<?php 

function getdata($sum){
		
	$num = $sum;
	
	if($num %8 == 0){
		
		$data = $num/8;
		return $data;
	}
	
	else {
		
		$num = $num/8;
		$num = floor($num);
		
		for($i=$num;$i>=1;$i--){
			
			$f = $i*8+($num-$i+1)*6;
			
			if($f == $sum){
				
				$data = $num+1;
				return $data;
				
			}
			
		}
		
		$num = $sum/6;
		$num = floor($num);
		
		for($i=$num;$i>=1;$i--){
				
			$f = ($i-1)*6+($num-$i+1)*8;
				
			if($f == $sum){
		
				$data = $num;
				return $data;
			}
				
		}
		
		if ($sum %6 == 0){
		
			$data = $sum/6;
			return $data;
		}
	}
	
	return -1;
	
}

$n = trim(fgets(STDIN));

$arr = array();

for($i=0;$i<$n;$i++){
	
	$arr[$i] = trim(fgets(STDIN));
}


for($i=0;$i<$n;$i++){
	
	
	$data =  getdata($arr[$i]);
	echo $data."\n";
}

?>
