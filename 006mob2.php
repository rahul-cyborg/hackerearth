<?php

$t=trim(fgets(STDIN));

for($i=0;$i<$t;$i++){

$arr[$i] = trim(fgets(STDIN));

}

for($i=0;$i<$t;$i++){
	
$inc = $arr[$i]+1;

echo $inc."\n";

$sum = ($arr[$i])*($arr[$i]+1);

$sum = $sum/2;

echo $sum."\n";

$s = range(0,$arr[$i]);

$s = implode(" ",$s);

echo $s."\n";

}


?>

