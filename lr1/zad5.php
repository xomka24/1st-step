<html>

<head>
	<title>Задание 5</title>
</head>

<body>


	
	<form method="POST">
	
		<p>Введите А: <input type="text" name="a"></p>
		Введите B: <input type="text" name="b">
		<p><input type="submit"></p>
		
	</form>
	
	<strong>Ответ:</strong>
	
	<?php
		if (isset($a)) {
		$a=$_POST['a'];
		$b=$_POST['b'];
		$k=0;
		while (($a-$b)>=0)
		{$k++;
		$a-=$b;
		}
		echo "$k";
		}
	?>
	
	
</body>

</html>