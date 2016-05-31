<?php 

$_fp = fopen("php://stdin","r");

fscanf($_fp,"%d",$n);

$arr = array("boolean","integer","float","string","array","object","resource","NULL");

$type = gettype($n);

if (in_array($type, $arr))
{
	if($type=="integer"){
		
		$type="int";
	}
	
	echo "Primitive : ".$type."\n";
}

fclose($_fp);
?>


