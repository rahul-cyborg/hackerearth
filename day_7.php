<?php 
$_fp = fopen("php://stdin","r");
$n = trim(fgets($_fp));
$arr = trim(fgets($_fp));
$arr = array_map('intval', explode(' ', $arr));
for($i=$n-1;$i>=0;$i--){	
	echo $arr[$i]." ";
}
fclose($_fp);
?>


