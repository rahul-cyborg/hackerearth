<?php 

function getdta($str){
	
	$data = array_map('intval', explode(' ', $str));
	
	$out = bcadd(bcmul($data[0], $data[2]),bcmul($data[1], $data[3]));
	
	return $out;
	
}

$t=trim(fgets(STDIN));

for($i=0;$i<$t;$i++){


	$arr[$i] = trim(fgets(STDIN));

}

for($i=0;$i<$t;$i++){

	$out= getdta($arr[$i]);

	echo $out."\n";
	
}

?>
