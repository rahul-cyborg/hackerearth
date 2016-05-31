<?php 

function getdata($mat,$a,$r,$c){
	
	$a = array_map('intval', explode(' ', $a));
	
	$x1 = $a[0];
	$y1 = $a[1];
	$x2 = $a[2];
	$y2 = $a[3];
	
	$sum = 0;
	
	for($i=1;$i<=$r;$i++){
		
		for($j=1;$j<=$c;$j++){
			
			if($i >= $x1 && $i <= $x2 && $j >= $y1 && $j <= $y2){
				
				$sum = $sum+$mat[$i][$j];
				
				
			}
			
			
		}
	}
	echo $sum."\n";
}

$arr=trim(fgets(STDIN));

$arr = array_map('intval', explode(' ', $arr));

$r = $arr[0];
$c = $arr[1];

$mat = array(); 

for($i=1;$i<=$r;$i++){

	
	$temp =  array_map('intval', explode(' ', trim(fgets(STDIN))));
	
	$mat[$i] = array_combine(range(1, $c), array_values($temp));
}

//print_r($mat);

$num = trim(fgets(STDIN));

$num = (int)$num;

$data = array();

for($i=0;$i<$num;$i++){
	
	$data[$i] =trim(fgets(STDIN));
	
	//getdata($mat,$a,$r,$c);
	
}

for($i=0;$i<$num;$i++){

	//echo $data[$i]."\n";
	getdata($mat,$data[$i],$r,$c);

}

?>
