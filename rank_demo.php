<?php 

$_fp = fopen("php://stdin","r");

fscanf($_fp,"%d",$n);

$arr = array();
for($i=0;$i<$n;$i++){
	$arr[$i] = trim(fgets($_fp));
	
}
print_r($arr);

fclose($_fp);

?>