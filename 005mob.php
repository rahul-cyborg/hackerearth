<?php


function getmaxXor($arr,$n1,$n2){

$j=0;

$ar = array();
for($i=$n1;$i<=$n2;$i++){
 $ar[$j] =  $arr[$i];
 $j++;	
}

sort($ar);

$val = (int)$ar[0] ^ (int)$ar[1] ^ (int)$ar[2] ^ (int)$ar[3];

return $val;
}

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

echo 'Case #'.($i+1)."\n";
echo $res['l'].' '.$res['r'].' '.$res['max']."\n";

}

?>

