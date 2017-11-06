<html>

<head>
	<title>Задание 6</title>
</head>

<body>
	
	
	<form method="POST">
	
		Введите N: <input type="text" name="N">
	
	</form>
Степени 2: 
	
	<?php
		
		$N=$_POST['N'];
		$ch=array();
		
		$ch[0]=2;
		echo"$ch[0] ";
		
		
		for ($i=1;$i<$N;$i++)
		{
			$ch[$i]=$ch[$i-1]*2;
			echo "$ch[$i] ";	
		}
			
			
		
	?>

</body>

</html>