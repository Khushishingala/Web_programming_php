<html>

<head>
<title>guess the random number</title>
</head>

<body>
<form action="" method="get">
guess the number 1 to 10:<input type="number" name="guess" min="1" max="10" required><br><br>
<input type="submit" name="submit" value="submit guess">
</form>

<?php
if(isset($_GET['submit'])){
	$randomnumber=rand(1,10);
	
	$userguess=$_GET['guess'];
	
	if($userguess==$randomnumber){
		echo "the number you guess is correct:$randomnumber";
		
	}else{
		echo "the number you guess is incorrect the correct number is $randomnumber";
	}
}
?>
</body>
</html>



