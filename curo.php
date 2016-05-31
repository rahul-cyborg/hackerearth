<?php 

function getdata($arr){
	
	$arr = array_map('intval', explode(' ', $arr));

	
	$count = 0;
	$ar = $arr;
	sort($ar);
	
	for($i=0;$i<count($arr);$i++){
		
		if ($arr[$i] != $ar[$i]){
			
			$count++;
		}	
	}
	
	$data = (int)$count/2;
	
	$data =  ceil($data);
	
	if($data <= 1){
		
		return true;
	}
	else {
		return false;
	}
		
		
	
	
}

	$out = trim(fgets(STDIN));


	$data = getdata($out);
	echo $data;


?>
