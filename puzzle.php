<?php
$array = array('space 1'=>4,'space 2'=>5,'space 3'=>'e','space 4'=>3,'space 5'=>1);
print_r($array);
echo "</br>";
echo "</br>";
$myarr1 = explode(' ', array_search('e',$array));
$blank = $myarr1[1]; // to fetch numerical part of key
$cnt=count($array);
$i=1;
while($i<$cnt+1)
{
	if($i != $array['space '.$i])
	{
		// do swap with empty space
		$array['space '.$blank] = $array['space '.$i];
		$temp = array_search($i,$array);
		if($temp == FALSE)
		{
			$array['space '.$blank] = $array['space '.$i];
			$array['space '.$i] = 'e';
			$blank = $i;
		}
		elseif($array[$temp] != $array['space '.$blank])
		{
			$array['space '.$i] = $array[$temp];
			$array[$temp] = 'e';
			$myarr2 = explode(' ',$temp);
			$blank = $myarr2[1];
		}
	}
	$i++;
}
print_r($array);
?>