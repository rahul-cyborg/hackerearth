<?php
function start($string)
{
    if ($string < 40)
        return 20;
    else
        return 30;
}
$t = start(80);
if ($t < 20)
{
    echo "good day!";
}
else
{
    echo " good night!";
}
?>
