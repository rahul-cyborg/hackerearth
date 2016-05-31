<?php 
function getdata($str){
$len = strlen($str);
$l = $len-1;
$i=2;
$k = 0;
$data = array_fill(0,$l, 0);
$dp = array();
while($i<$len){
if($str[$i]!=$str[$i-1] || $str[$i]!=$str[$i-2]){
$data[$i] = 1;


if($data[$i-3] == 1){

$dp[$k]  = $dp[$k-1]+1;

}
else{

$dp[$k] = 1;
}
$k++;
$i = $i+3;
}
else{
$i++;
}
}
$mx = 0;
print_r($dp);
echo $len."\n";
if(count($dp) >=1){
$mx = max($dp);
}

$mx = 3*$mx;
$diff= $len-$mx;
echo $diff."\n";

}
$num=trim(fgets(STDIN));
$arr = array();
for($i=0;$i<$num;$i++){
$arr[$i] = trim(fgets(STDIN));
}
for($i=0;$i<$num;$i++){
getdata($arr[$i]);
}
?>