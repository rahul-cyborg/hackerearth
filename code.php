<?php 

function issubstring($s1,$s2){

	$l1 = strlen($s1);
	$l2 = strlen($s2);

	for($i=0;$i<$l1-$l2;$i++){

		$j=0;

		while($s1[$i+$j]==$s2[$j] && $j<$l2){
			$j++;
		}

		if($j==$l2){

			return true;

		}


	}

	return false;

}

issubstring('abcd','bc');

?>