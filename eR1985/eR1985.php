<?php
$X = $_POST['xvalue'];
$Y = $_POST['yvalue'];
$power = 0;
if($Y >= 0)
{
	$power = $Y;
}
else
{
	$power = -$Y;
}
$Z = 1;
while($power != 0)
{
	$Z = $Z * $X;
	$power = $power - 1;
}
if($Y < 0)
{
	$Z = 1 / $Z;
}
$Z = $Z + 1;

