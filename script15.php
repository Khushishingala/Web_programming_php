<html>

<head>
<title>find the largest number</title>
</head>

<body>

<form action=""method="get">
enter first number:<input type="number" name="num1" required><br />
<br>
enter second number:<input type="number" name="num2" required><br />
<br>
enter third number:<input type="number"name="num3" required><br />

<input type="submit" style="margin-top:10px; font-size:larger;" name="submit" value="find largest">
</form>

<?php
if(isset($_GET['submit']))
{
	$num1=$_GET['num1'];
	$num2=$_GET['num2'];
	$num3=$_GET['num3'];

$largest=max($num1,$num2,$num3);

echo "the largest number of the three number is:$largest";
}
?>
</body>
</html>	



