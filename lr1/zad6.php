<html>

<head>
	<title>������� 6</title>
</head>

<body>
	
	
	<form method="POST">
	
		������� N: <input type="text" name="N">
	
	</form>
������� 2: 
	
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