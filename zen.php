<?php

function getcount($str){

$count = 0 ;
$var = strlen($str);
if($var == 1){
return $count;
}
else {

if($var%2 == 0){
$index = (int)$var/2;
}
else {
$index = (int)$var/2;

$index = $index+1;

}
$num = (int)$var/2;

$left =substr($str, 0, $num);
$left =str_split($left);

$right = substr($str, $index, $num);
$right = strrev($right);
$right =str_split($right);


for($i=0;$i<count($left);$i++){

$diff = abs(ord($right[$i])-ord($left[$i]));
$count = $count+$diff;
}
return $count;
}
}
$t=trim(fgets(STDIN));

for($i=0;$i<$t;$i++){


$arr[$i] = trim(fgets(STDIN));

}

for($i=0;$i<$t;$i++){

$p = getcount($arr[$i]);

echo $p."\n";

}

?>

