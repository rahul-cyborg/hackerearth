<?php 


	$length = trim(fgets(STDIN));

	$str = trim(fgets(STDIN));

	$arr = array_map('intval', explode(' ', $str));

	$diff= 0;

  sort($arr);

	for($i=1; $i<=$length;$i++){

			if(bcmul($i, $i) > $arr[$i - 1]){
			$diff =  bcadd($diff, bcsub(bcmul($i, $i), $arr[$i - 1])) ;
		}
	
	}
	echo $diff."\n";

?>
