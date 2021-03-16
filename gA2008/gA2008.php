<?php
$a = $_POST['avalue'];
$b = $_POST['bvalue'];
$y = 0;
if($a == 0)
{
	$y = $b;
}
else
{
	while ($b != 0)
	{
		if($a > $b)
		{
			$a = $a - $b;
		}
		else
		{
			$b = $b - $a;
		}
	}
	
	$y = $a;
}

