<!DOCTYPE HTML>
<!DOCTYPE html>
<html>
<head>
	<title>Armstrong Number in PHP</title>
		<style type="text/css">
		body{
			margin-top: 180px;
			margin-left: 590px;
			background: skyblue;
		}
		 p{
	margin-right: 50px;	 	
  	font-weight: 600;
  	font-family: verdana;

  	font-size: 20px;
  	color: black;
  }
	</style>
</head>
<body>
	<p>Finding Armstrong of inserted number|-->Jayrajsinh<--|</p>

	<form method="post">
		
		Enter the Number:
		<input type="number" name="number">
		<input type="submit" name="Submit">
	</form>

</body>
</html>

<?php

if($_POST)
{
	$number = $_POST['number'];

	$a = $number;
	$sum = 0;
	while ($a!=0) {

		$rem = $a%10;
		$sum = $sum+($rem*$rem*$rem);
		$a = $a/10;

	}
	if($number==$sum)
	{
		echo "Yes $number is an Armstrong Number";
	}
	else
	{
		echo "$number is not an Armstrong Number";
	}
}

?>