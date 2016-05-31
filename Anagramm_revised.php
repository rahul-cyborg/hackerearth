<?php 
$n = trim(fgets(STDIN));
$out = array();
for ($i=0;$i<$n;$i++){
	
	$out[$i] = trim(fgets(STDIN));
}
for ($i=0;$i<$n;$i++){	
	$string = $out[$i] ;
	$stringParts = str_split($string);
	sort($stringParts);
	$out[$i] =implode('', $stringParts);
}
$out = array_count_values($out);
$max = max($out);
echo $max;
?>
