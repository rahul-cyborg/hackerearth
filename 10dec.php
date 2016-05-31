<?php

function getdata($a,$size,$num){
	
	$a = explode(" ",$a);
	$num = str_split($num);
	
	$sum = 0;
	for($i=0;$i<$size;$i++){
		
		$val = $num[$i];
		
		$min = $a[$val];
		
		for($j=0;$j<=9;$j++){
			
			for($k=0;$k<=9;$k++){
				if(($j+$k)%10 == $val){
				if(($a[$j]+$a[$k]) < $min){
					
					$min = $a[$j]+$a[$k];
					
					echo "min=".$min."j=".$j."k=".$k."\n";
				}
			   }	
			}
		}
		
		
	$sum = $sum+$min;	
	}
	
	return $sum;
	
	}


$t=trim(fgets(STDIN));

for($i=0;$i<(3*$t);$i++){


$arr[$i] = trim(fgets(STDIN));

}

for($i=0;$i<(3*$t);$i += 3){
	
	$out = getdata($arr[$i],$arr[$i+1],$arr[$i+2]);
	echo $out."\n";
	
}

?>

