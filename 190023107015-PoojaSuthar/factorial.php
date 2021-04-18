<!DOCTYPE html>
<html>
<head>
	<title>Factorial Program using PHP</title>
	<style type="text/css">
		body{
			margin-top: 180px;
			margin-left: 650px;
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

	<p>Finding factorial of inserted number|-->Jayrajsinh<--|</p>

	<form method="post">

		Enter the Number:<br>
		<input type="number" name="number" id="number">

		<input type="submit" name="submit" value="Submit" />
		
	</form>

	<?php  
     if ($_POST) {
     	$fact = 1;

     	$number = $_POST['number'];
     	echo "Factorial of $number:<br><br>";


     	for($i = 1; $i<=$number; $i++){

     		$fact = $fact * $i;
     	}
     	echo $fact."<br>";
     }



	?>
</body>
</html>