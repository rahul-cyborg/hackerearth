<?php 

$_fp = fopen("php://stdin","r");

$base = trim(fgets($_fp));

$per_tip = trim(fgets($_fp));

$per_tax = trim(fgets($_fp));

$tip =  ($base*$per_tip)/100;
$tax = ($base*$per_tax)/100;

$total = $base+$tip+$tax;

$total = round($total, 0);

echo "The final price of the meal is $".$total.".";

fclose($_fp);
?>


