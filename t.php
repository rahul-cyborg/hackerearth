<?php

function getdata($str){

$s = strlen($str);
$s1 = (int)($s/2);

if($s%2 == 1){

$f = substr($str,0,$s1+1);
}
else {
$f = substr($str,0,$s1);
}
$fl = substr($str,$s1,$s);

//echo $f." fl ".$fl;
$lc = substr_count($f,'1');
$rc = substr_count($fl,'1');

if($lc>$rc){
$str = strrev($str);
}

$arr = str_split($str);

 $left = 0;
 $right = count($arr)-1;
$count = 0; 
    while ($left < $right)
    {
        
        while ($arr[$left] == 0 && $left < $right){
            $left++;
 }
        while ($arr[$right] == 1 && $left < $right){
            $right--;
 }
        
        if ($left < $right)
        {
            $arr[$left] = 0;
            $arr[$right] = 1;
            $left++;
            $right–;
	    $count++;	
        }
    }
return $count;
}

$t=trim(fgets(STDIN));

$t= (explode(" ",$t));

$j = 0;
$arr = array();
for($i=1;$i<count($t);$i++){
$arr[$j] = getdata($t[$i]);
$j++;
}

$out = implode(" ",$arr);
echo $out."\n";

?>
