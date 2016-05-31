<?php

function getdata($arr){

	$n = $arr[0];
	$m = $arr[1];
	$start = $arr[2];
	$end = $arr[3];

	$new = array();

	for($i=$start;$i<=$end;$i++){

		$new[$i] = 1;
	}

	for($k=0;$k<$n;$k++){

		$t1 = trim(fgets(STDIN));
		$ar = array_map('intval', explode(' ', $t1));

		$first = $ar[0];
		$last  = $ar[1];


		for($j=$first;$j<=$last;$j++){

			if(isset($new[$j])){

				if($new[$j] == 1 ){

					$new[$j] = 0;
	 			}
 			}
		}


	}
	$sum = array_sum($new);
	return $sum;

}

$testCase = trim(fgets(STDIN));

$out  = array();

for($i=0;$i<$testCase;$i++){


	$t=trim(fgets(STDIN));
	$arr = array_map('intval', explode(' ', $t));
	$out[$i] = getdata($arr);
	
}

for($i=0;$i<$testCase;$i++){

	echo $out[$i]."\n";
}


?>
