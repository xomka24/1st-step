<html>

<head>
	<title>Задание 3</title>
</head>

<body>

	
	<form method="POST">
		
		Введите число: <input type="text" name="ch">
	
	</form>
	<strong>Оценка:</strong>
	<?php
	
		$ch=$_POST['ch'];
		
		switch ($ch)
		{
			case 1:
				echo "Плохо";
				break;
			case 2:
				echo "Неудовлетворительно";
				break;
			case 3:
				echo "Удовлетворительно";
				break;
			case 4:
				echo "Хорошо";
				break;
			case 5:
				echo "Отлично";
				break;
			default:
				echo "Ошибка";
				break;
		}
		
	?>
	
<body>

</html>