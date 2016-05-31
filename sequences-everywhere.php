<?php 
$t=trim(fgets(STDIN));
$arr = array_map('intval', explode(' ', $t));
$first = $arr[0];
$last = $arr[1];
$store = array();

for($i=$first;$i<=$last;$i=bcadd($i,1)){

$num = $i;
$count = 1;
$k=2;
while($k<$num){
if(bcmod($num, $k) != 0){
$num = $k;
$k = 2;
if (array_key_exists($num,$store))
  {
  $count = bcadd($count,$store[$num]);
  break;
  }
else
  {
  $count = bcadd($count,1);;
  }

}
else {
$k=bcadd($k,1);
}
}
$store[$i] = $count;
}
$sum = 0;

foreach ($store as $val) {

$sum = bcadd($sum,$val);

}
//print_r($store);
echo $sum;
?>