<?php
$a = $_POST['a'];
$d = $_POST['d'];
if($d == 0)
{
	$y = 0;
}
else
{
	if($a < $d)
	{
		$y = $a;
	}
	else
	{
		while($a >= $d)
		{
			$a = $a - $d;
		}
		$y = $a;
	}
}
