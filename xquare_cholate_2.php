<?php 
function getdata($str){
	
$len = strlen($str);
$str = "i".$str;
$i=3;
$max = 0;
$data =array();
$data[0] = 0;
$data[1] = 0;
$data[2] = 0;

while($i<=$len){

if($str[$i]!=$str[$i-1] || $str[$i]!=$str[$i-2]){
$data[$i] = $data[$i-3]+3;

$max = max($max,$data[$i]);

}
$i++;
}

$diff= $len-$max;
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
