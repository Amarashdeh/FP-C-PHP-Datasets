<?php
$a = $_POST['a'];
$b = $_POST['b'];
$c = $_POST['c'];
$type = 0;
$area = 0;
if (($a < $b) || ($b < $c)){
  $type = -1;
  $area = 0;
}
elseif ($a >= ($b + $c))
{
  $type = -1;
  $area = 0;
}
elseif (($a != $b) && ($b != $c))
{
  $as = $a * $a;
  $bs = $b * $b;
  $cs = $c * $c;
  if ($as == $bs + $cs)
  {
    $type = 1;
    $area = $b * $c / 2.0;
  }
  else
  {
    $s = ($a + $b + $c) / 2.0;
    $area = sqrt($s * ($s - $a) * ($s - $b) * ($s - $c));
    if ($as < $bs + $cs)
    {
      $type = 2;
    }
    else
    {
      $type =3;
    }
  }
}
elseif (($a == $b) && ($b == $c)){
  $type = 4;
  $area = $a * $a * sqrt(3.0) / 4.0;
}
else
{
  $type = 5;
  if ($a == $b)
  {
    $area = $c * sqrt(4 * $a * $b - $c * $c) / 4;
  }
  else{
    $area = $a * sqrt(4 * $b * $c - $a * $c) / 4;
  }
}
?>