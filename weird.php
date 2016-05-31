<?php 


$n=trim(fgets(STDIN));

$arr=trim(fgets(STDIN));

$arr = array_map('intval', explode(' ', $arr));

sort($arr);

$new = array();

$s_e = 0;

for($i=0;$i<$n;$i++){
	
	if($arr[$i]%2 == 0){
		
		$x = (int)$arr[$i];
		array_push($new, $x);
		$s_e = bcadd($s_e,$x);
	}
	
}
if($s_e > 0){
	array_push($new, $s_e);
}

$s_o = 0;

for($i=0;$i<$n;$i++){

	if($arr[$i]%2 == 1){

		$x = (int)$arr[$i];
		array_push($new, $x);

		$s_o = bcadd($s_o,$x);
	
	}

}
if($s_o > 0){
	array_push($new, $s_o);
}

$new = implode(" ",$new);

echo $new;

?>
