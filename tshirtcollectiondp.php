<?php 

function getdata($n,$arr){
	
	$arr = array_map('intval', explode(' ', $arr));
	
	$new = array();
	
	for($i=0;$i<$n;$i++){
		
		if (in_array($arr[$i], $new))
		{
			$new[] = 0;
		}
		else
		{
			$new[] = $arr[$i];
		}
		
	}
	
	print_r($new);
}
$n = trim(fgets(STDIN));

$out = array();

for ($i=0;$i<(2*$n);$i++){

	
	$out[$i] = trim(fgets(STDIN));
}

for ($i=0;$i<(2*$n);$i=$i+2){

	getdata($out[$i],$out[$i+1]);

}

?>
