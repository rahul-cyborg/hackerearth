<?php 


$n=trim(fgets(STDIN));

$arr = str_split($n);
$l = count($arr);
$ev = 0;

for($i=0;$i<$l;$i++){
	
	if($arr[$i]%2 == 0){
		$ev++;
	}
}

$new = array();

for($i=0;$i<$l;$i++){
	
	if($arr[$i]%2 == 0){
		
		$new[] = $ev;
		$ev--;
	}
	else {
		$new[] = $ev;
		
	}
	
}

$new = implode(" ",$new);

echo $new;

?>
