<?php 

// you can write to stdout for debugging purposes, e.g.
// print "this is a debug message\n";

function solution($S) {

$S = str_replace(' ', '', $S);
$S = str_replace('-', '', $S);

$str = "";
$len =strlen($S);
$r = $len%3;


if($r == 1 &&  $len != 1){

$data = floor($len/3);

$data = $data-1;

$data = $data*3;

for($i=0;$i<$data;$i++){

if($i%3 == 2){
$str = $str.$S[$i]."-";
}
else {
$str = $str.$S[$i];
}
}

for($k=$data;$k<$len;$k++){

if($k == $data+1){
$str = $str.$S[$k]."-";
}
else{
$str = $str.$S[$k];
}

}


}

if($r == 0  || $r == 2 || $len == 1){

for($i=0;$i<$len;$i++){

if($i%3 == 2 && $len-$i > 1){
$str = $str.$S[$i]."-";
}
else {
$str = $str.$S[$i];
}
}}

echo $str;
}

$S = trim(fgets(STDIN));


solution($S);


?>
