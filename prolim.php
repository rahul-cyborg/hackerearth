<?php 

// you can write to stdout for debugging purposes, e.g.
// print "this is a debug message\n";

function solution($S) {
      
$num = bindec($S);
$count = 0 ;

if($num == 0){
return $count;
}

while($num!=0){
    
if($num%2 != 0 ){
$num = $num - 1;
$count++;
if($num == 0){
return $count;
}
}
else{
$num = $num/2;
$count++;
if($num == 0){
return $count;
}
}
}
}

$S = trim(fgets(STDIN));


echo  solution($S);


?>
