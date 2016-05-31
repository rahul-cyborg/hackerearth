<?php 

function getdata($value,$arr){

	if (array_key_exists($value, $arr)) {
		
		echo $value."=".$arr[$value]."\n";
	}
	else {
		
		echo "Not found"."\n";
	}

}
$_fp = fopen("php://stdin","r");

$n = trim(fgets($_fp));

$arr = array();

for($i=0;$i<2*$n;$i++){

	$arr[$i] = trim(fgets($_fp));
}

$hash = array();

for($i=0;$i<(2*$n);$i=$i+2){
	
	$hash[$arr[$i]] = $arr[$i+1]; 
}

$out = array();
$i = 0 ;
$temp =  trim(fgets($_fp));

while($temp != NULL){
	
	$out[$i] = $temp;
	$i++;
	$temp =  trim(fgets($_fp));
	
}
if($temp == NULL){
	
	for($k=0;$k<$i;$k++){
		
		getdata($out[$k],$hash);
	}
}



fclose($_fp);
?>


