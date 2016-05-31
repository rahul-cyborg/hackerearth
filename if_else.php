<?php 

$_fp = fopen("php://stdin","r");

$n = trim(fgets($_fp));

if($n ==1){
	
	echo "Weird";
	
}
elseif($n%2 == 1){
	
	echo "Weird";
	
}
else {
	
	if ($n>=2 && $n <= 5){
	
		echo "Not Weird";
	
	}
	elseif ($n>=6 && $n <= 20){
	
		echo "Weird";
	
	}
	else {
		echo "Not Weird";
	}
}

fclose($_fp);
?>


