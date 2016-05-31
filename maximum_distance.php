<?php 


$n = trim(fgets(STDIN));

$arr = trim(fgets(STDIN));

$arr1 = trim(fgets(STDIN));

$rem = trim(fgets(STDIN));

$arr = array_map('intval', explode(' ', $arr));

$arr1 = array_map('intval', explode(' ', $arr1));

$out = array();

for ($i=0;$i<$n;$i++){
	
	$out[$i] = bcdiv($arr[$i],$arr1[$i],10);
}

//print_r($out);

$mx = max($out);

$data = $rem*$mx;

$data = floor($data * 1000) / 1000;

echo $data;

?>
