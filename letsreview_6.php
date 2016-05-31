<?php 
$_fp = fopen("php://stdin","r");
$n = trim(fgets($_fp));
for($i=1;$i<=$n;$i++){
	
	$f= str_repeat(" ", $n-$i);
	$s = str_repeat("#", $i);
	$str = $f.$s;
	echo $str."\n";
}
fclose($_fp);
?>


