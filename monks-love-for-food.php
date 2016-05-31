<?php 

$stack = array();

function getdata($arr){
	
		
	$arr = array_map('intval', explode(' ', $arr));
	
	$count = count($arr);
	
	GLOBAL $stack;
	$l = count($stack);
	
	if ($count == 1){
		 
		if( $l == 0 ){
		
			echo "No Food"."\n";
		
		}
		else {
		echo $stack[$l-1]."\n";
		
		array_pop($stack);
		}
		
	}
	else{
		
		$data = $arr[1];
		
		array_push($stack,$data);
	}

}

$n = trim(fgets(STDIN));

$n = (int)$n;

$arr = array(); 


for($i=0;$i<$n;$i++){
	
	$arr[$i] = trim(fgets(STDIN));
}

for($i=0;$i<$n;$i++){
	
	getdata($arr[$i]);
	
}


?>
