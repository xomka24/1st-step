<html>

<head>
	<title>Задание 10</title>
</head>

<body>
	
	<img src="z10.png">
	
	<form method="POST">
	
		<p>N1:<input type="text" name="N1"></p>
		<p>N2:<input type="text" name="N2"></p>
		<p>Введите строку S1:<input type="text" name="S1"></p>
		<p>Введите строку S2:<input type="text" name="S2"></p>
		
		
		<input type="submit" value="Отправить">
	
	</form>
	
	<?php
		
		$N1=$_POST['N1'];
		$N2=$_POST['N2'];
		$S1=$_POST['S1'];
		$S2=$_POST['S2'];
		
		$str1=substr($S1, 0,$N1);
		$str2=substr($S2,-$N2);
		
		$str=$str1.$str2;
		echo $str;
		
	?>

</body>

</html>