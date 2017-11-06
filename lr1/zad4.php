<html>

<head>
	<title>Задние 4</title>
</head>

<body>
	
	
	<form method="POST">
		A:<input type="text" name="a">
		B:<input type="text" name="b">
		<input type="submit">
	</form>
	
	<?php
	print $_POST['a'];
	if ($_POST['a'] != "") {
		$s=0;
		$a=$_POST['a'];
		$b=$_POST['b'];
		for ($b=$b-1; $a<$b; $b--){
			$s++;
			echo"$b ";			
		}
		echo"<p>Количество чисел:$s</p>";
	}
	?>
	
</body>

</html>