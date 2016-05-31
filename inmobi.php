<?php

function  getmindiff($arr){
$sz = $arr[0];
array_shift($arr);
sort($arr);

for($i=0;$i<($sz/2);$i++){

$new[$i] = $arr[$i]+$arr[$sz-$i-1];


}

//print_r($new);
$min = min($new);
//echo "min=".$min."\n";
$max = max($new);
//echo "max=".$max."\n";
$diff = $max-$min;
return $diff;
}

$n=trim(fgets(STDIN));

for($i=0;$i<$n;$i++){

$t = trim(fgets(STDIN));
$t = explode(" ",$t);
$arr[$i]=$t;

}

for($i=0;$i<$n;$i++){
//print_r($arr[$i]);

$out = getmindiff($arr[$i]);
echo $out."\n";
}
?>
