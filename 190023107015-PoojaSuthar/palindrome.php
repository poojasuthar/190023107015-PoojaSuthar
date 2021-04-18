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
	<p>Finding Palindrome of inserted number|-->Jayrajsinh<--|</p>

<form method="post">
	Enter a number:<input type="number" name="num" /><br>
	<button type="submit">Check</button>
</form>
</body>
</html>
<?php 
if($_POST)
{
	$num = $_POST['num'];
	$reverse = strrev($num);

	if($num==$reverse)
	{
		echo "The number $num is palindrome";
	}
	else
	{
		echo "The number $num is not a Palindrome";
	}

}
?>

