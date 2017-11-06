<html>

<head>

	<title>Задание 2</title>

</head>

<body>

	
	<form method="POST">
	
		<p>Введите число: <input type="text" name="ch"></p>
			
	</form>

	<?php
		
		$ch=$_POST['ch'];
		
		if ($ch>=0)
			$ch++;
		else
			$ch-=2;
	
	?>
	
	<strong>Ответ:</strong>
	
	<?=	"$ch";
	?>
	
</body>

</html>