<?php
$num=11;
$n=0;

for($i=2;$i<$num;$i++)
{
	if($num % $i==0)
	{
		$n++;
		break;
}
}
if($n==0)
{
	echo $num." is a prime number";
}
else
{
	echo $num." is a not prime number";
}
?>