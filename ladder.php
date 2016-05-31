<?php 

$n = trim(fgets(STDIN));

for($i=1;$i<=$n;$i++){
	
	$bl = $n-$i;
	$hash = $i;
	
	$inp = "";
	
	$f = str_pad($inp, $bl, " ", STR_PAD_LEFT);
	$s = str_repeat("#", $hash);
	
	echo $f.$s."\n";
}

?>