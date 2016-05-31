<?php 


function backtrack($str,$l,$r){
	
	if($l == $r){
		
		echo $str."\n";
	}
	else {
		
		
		for($i=$l;$i<=$r;$i++){
			
			$temp = $str[$i];
			$str[$i] = $str[$l];
			$str[$l] = $temp;
			
			backtrack($str,$l+1,$r);
		}
	}
	
}

$str = trim(fgets(STDIN));
$r = strlen($str)-1;
backtrack($str,0,$r);


?>
