<html>

<head>

	<title> Задание 1 </title>

</head>

<body>
	

	<form  method="POST">
		
		<p>x: <input type="text" name="x"></p>
		
		<p>y: <input type="text" name="y"></p>
		
		<input type="submit" value="Отправить">
		
	</form>
	
	<?php

		$x=$_POST['x'];

		$y=$_POST['y'];

	$q1=pow($x,2)+ pow($y,2);
	$q2=pow($x,2)*pow($y,2);
	$q3=pow($x,2)-pow($y,2);
	$q4=pow($x,2)/pow($y,2);
	 
		echo "Сумма:$q1 Произведение:$q2 Разность:$q3 Частное:$q4 ";
	?>
	
</body> 



</html>