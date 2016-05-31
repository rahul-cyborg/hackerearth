<?php
$n = trim(fgets(STDIN));
$arr = array();
for($i=0;$i<$n;$i++){

$size = trim(fgets(STDIN));

$new = array();

for($j=0;$j<$size;$j++){

$line = trim(fgets(STDIN));
$line = array_map('intval', explode(' ', $line));

$key = $line[0];
$val = $line[1];

$new[$key] = $val;

}

$arr[$i] = $new;

}

for($i=0;$i<$n;$i++){

	getdata($arr[$i]);

}

function getdata($arr){

	krsort($arr);
	$data = array();

	foreach ($arr as $key => $val) {

		$data[] = $val;
    
	}


	$reversed = array_reverse($data);
	getmax($reversed);


}

function getmax($arr){

	$mis = array();

	for($i=0;$i<count($arr);$i++){

		$mis[$i] = $arr[$i];
	}

	for($i=1;$i<count($arr);$i++){

		for($j=0;$j<$i;$j++){

			if($arr[$i]>$arr[$j]  && $mis[$i] < $mis[$j]+$arr[$i] ){

				$mis[$i] = $mis[$j]+$arr[$i];
			}
		}
	}

	$max = max($mis);
	echo $max."\n";



}

?>