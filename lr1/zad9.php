<html>

<head>
	<title>Задание 9</title>
</head>

<body>
	
	
	<form method="POST">
	
		Введите строку: <input type="text" name="str">
	
	</form>
	
	<?php
		
		$str=$_POST['str'];
		$str=preg_replace('/[a-z]/','',$str);
		$res=mb_strlen(preg_replace('/[0-9]/','',$str),'windows-1251');
		echo $res;
		
	?>
	
</body>


</html>