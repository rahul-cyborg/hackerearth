<?php

$t=trim(fgets(STDIN));

for($i=1;$i<=$t;$i++){


$arr[$i] = (int)trim(fgets(STDIN));

}

$fact = array();

$fact[1] = 1;

for($i=2;$i<=100;$i++){
	
	$fact[$i] = bcmul($fact[$i-1],$i);
		
}

print_r($arr);

for($i=1;$i<=$t;$i++){
	
	
$d = (int)$arr[$i];

$data = $fact[$d];

echo $data."\n";

}


?>
