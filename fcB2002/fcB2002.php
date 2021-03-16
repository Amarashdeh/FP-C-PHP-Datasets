<?php
$f1 = $_post['f1value'];
$f2 = $_post['f2value'];
$f3 = $_post['f3value'];
$result = 0;

if($f3 > $f2)
{
	if($f2 > $f1)
	{
		$result = 1;
		$t = $f1 + $f2;
		if($t < $f3)
		{
			$result = 2;
			$t2 = $f1 * $f2;
			if ((($t2 - $f3) <= 5) && (($t2 - $f3) >= 0))
			{
				$result = 3;
			}
		}
		else
		{
			$result = 4;
		}
	}
}

?>
