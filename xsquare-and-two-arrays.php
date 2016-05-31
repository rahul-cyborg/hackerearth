<?php
  
 
$arr = trim(fgets(STDIN));
$arr = array_map('intval', explode(' ', $arr));
 
$n = $arr[0];
$q = $arr[1];
 
$A = trim(fgets(STDIN));
$A = array_map('intval', explode(' ', $A)); 
 
$B = trim(fgets(STDIN));
$B = array_map('intval', explode(' ', $B));
 
$input = array();
 
for($i=0;$i<$q;$i++){
	
	$input[$i] = trim(fgets(STDIN));
}
 

$A1 = array();

$start='second';
$sum = 0;
for($i=0;$i<$n;$i++){
		
	if($start == 'second'){

		$sum = bcadd($sum,$A[$i]);
		$start='first';
		$A1[$i] = $sum;
	}
	else {

		$sum = bcadd($sum,$B[$i]);
		$start='second';
		$A1[$i] = $sum;
	}
		
}

$B1 = array();
$sum = 0;
$start='first';

for($i=0;$i<$n;$i++){

	if($start == 'first'){

		$sum = bcadd($sum,$B[$i]);
		$start='second';
		$B1[$i] = $sum;
	}
	else {

		$sum = bcadd($sum,$A[$i]);
		$start='first';
		$B1[$i] = $sum;
	}

}


for($k=0;$k<$q;$k++){

	$arr = array_map('intval', explode(' ', $input[$k]));
	$f = $arr[0];
	$sum = 0;
	$i1 = $arr[1];
	$i2 = $arr[2];
	
	if($f == 1){
		
		if($i1 == 1){
			
			echo $A1[$i2-1]."\n";
		}
		else {
			
			echo bcsub($A1[$i2-1],$A1[$i1-2])."\n";
		}
		
		
	}
	else{
	
		if($i1 == 1){
				
			echo $B1[$i2-1]."\n";
		}
		else {
				
			echo bcsub($B1[$i2-1],$B1[$i1-2])."\n";
		}
		
	}
	
}
 
 
?>
 