<html>

<head>

	<title> ������� 1 </title>

</head>

<body>
	

	<form  method="POST">
		
		<p>x: <input type="text" name="x"></p>
		
		<p>y: <input type="text" name="y"></p>
		
		<input type="submit" value="���������">
		
	</form>
	
	<?php

		$x=$_POST['x'];

		$y=$_POST['y'];

	$q1=pow($x,2)+ pow($y,2);
	$q2=pow($x,2)*pow($y,2);
	$q3=pow($x,2)-pow($y,2);
	$q4=pow($x,2)/pow($y,2);
	 
		echo "�����:$q1 ������������:$q2 ��������:$q3 �������:$q4 ";
	?>
	
</body> 



</html>