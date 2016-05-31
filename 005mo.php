<?php

function getdata($arr){
$max = getmaxXor($arr,0,3);
$l=0;
$r=3;
$p = count($arr);
for($i=0;$i<=($p-4);$i++){

	for($j=($i+3);$j<$p;$j++){
		
		$mx = getmaxXor($arr,$i,$j);
		if($mx > $max){

			$max = $mx;
			$l = $i;
			$r = $j;

			}	
		if(($mx == $max) && (($r-$l) < ($j-$i)) ){
			
			$max = $mx;
                        $l = $i;
                        $r = $j;

		
		}	

		}

	}

$res['max']=$max;
$res['l']= $l+1;
$res['r'] =$r+1;
return $res; 
}

function getmaxXor($arr,$n1,$n2){

$j=0;

//$ar = array();

$f1 = $arr[$n1];

for($h=$n1;$h<=$n2;$h++){
if($arr[$h] < $f1 ){
$f1 = $arr[$h];
}
}

$f = $f1;
$s = $f1;
$t = $f1;
$th = $f1;


for($i=$n1;$i<=$n2;$i++){
 $ar[$j] =  $arr[$i];
 $j++;

 if ($f > $arr[$i]) {
     $temp = $f;
     $f = $arr[$i];
     $s = $temp;
 }
 if ($s > $arr[$i] && $f > $arr[$i])
 {
 $temp = $arr[$i];
 $s = $arr[$i];
 $t = $temp;
 }
 if ($t > $arr[$i] && $s > $arr[$i])
 {
  $temp = $arr[$i];
   $t=$arr[$i];
   $th = $temp;
 }
 
  if ($th > $arr[$i] && $t > $arr[$i])
 {
  $temp = $arr[$i];
   $th=$arr[$i];
  
 }
 
 
}

print_r($ar);
echo $f." ".$s." ".$t." ".$th." "."\n";
//sort($ar,1);

$val = (int)$f ^ (int)$s ^ (int)$t ^ (int)$th;

return $val;
}

$n=trim(fgets(STDIN));

$k=0;

for($i=0;$i<(2*$n);$i++){

$t = trim(fgets(STDIN));
if($i%2 == 1){
$t = explode(" ",$t);
$arr[$k]=$t;
$k++;

}

}

for($i=0;$i<$n;$i++){
$res= getdata($arr[$i]);

echo 'Case #'.($i+1).":\n";
echo $res['l'].' '.$res['r'].' '.$res['max']."\n";

}

?>


