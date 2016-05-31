<?php

function getdata($str,$noOfQuries){

	$out  = array();

	for($k=0;$k<$noOfQuries;$k++){

		$t=trim(fgets(STDIN));
		$arr = array_map('intval', explode(' ', $t));
		$first = $arr[0]-1;
		$last = $arr[1]-1;

		$count = 0;

		for($p = $first;$p<=$last;$p++){

			if($str[$p] == $str[$p+1] && $str[$p] == $str[$p+2]){

				$count++;
			}

		}
		
		$out[$k] = $count;		

	}

	return $out;
}

function printout($out,$testCase){

 for($i=0;$i<$testCase;$i++){

 	$arr = $out[$i];

 	foreach ($arr as $value) {

    echo $value."\n";

    }

 }

}

$testCase = trim(fgets(STDIN));
$out = array();
for($i=0;$i<$testCase;$i++){

	$str =  trim(fgets(STDIN));

	$noOfQuries =  trim(fgets(STDIN));

	$out[$i] = getdata($str,$noOfQuries);

}

printout($out,$testCase);

?>
