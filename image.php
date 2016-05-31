<?php

function getdata($str,$len){
	
	$str = trim($str);
	
	$str = explode(" ",$str);
	
	
	if((int)$str[0] < $len || (int)$str[1] < $len){
		
		echo "UPLOAD ANOTHER"."\n";
		
	}
	elseif((int)$str[0] == $len && (int)$str[1] == $len){
		
			echo "ACCEPTED"."\n";
	}
	elseif((int)$str[0] >= $len && (int)$str[1] >= $len){
		
		echo "CROP IT"."\n";
	}
	
	else {
		
		echo "UPLOAD ANOTHER"."\n";
	}
	
	
	}

$len=trim(fgets(STDIN));

$t=trim(fgets(STDIN));

for($i=0;$i<$t;$i++){


$arr[$i] = trim(fgets(STDIN));

}

for($i=0;$i<$t;$i++){

getdata($arr[$i],$len);

}


?>
