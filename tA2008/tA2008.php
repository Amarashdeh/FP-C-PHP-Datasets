<?php
$a = $_POST['a'];
$b = $_POST['b'];
$c = $_POST['c'];
$Triangle = 0;
if(($a + $b > $c) && ($b + $c > $a) && ($c + $a > $b)) 
	{ 
	if(($a != $b) && ($b != $c) && ($c != $a)) 
	{ 
		$Triangle = 1;  
	}
	else
	{ 
		if((($a == $b) && ($b != $c)) || (($b == $c) && ($c != $a)) || (($c == $a) && ($a!= $b)))
		{ 
			$Triangle = 2;
		}
		else
		{ 
			$Triangle = 3; 
		}
	}
}
else
{ 
	$Triangle = -1; 
} 
?>