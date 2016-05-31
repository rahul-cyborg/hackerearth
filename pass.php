<?php 



$t=trim(fgets(STDIN));

for($i=0;$i<$t;$i++){


	$arr[$i] = trim(fgets(STDIN));

}

for($i=0;$i<$t;$i++){

	$str = strrev($arr[$i]);

	if (in_array($str, $arr)) {
		
		$len = strlen($str);
		$mid = (int)$len/2;
		
		$str = str_split($str);
		echo $len." ".$str[$mid]."\n";
		
		break;
		
	}

	
}

?>