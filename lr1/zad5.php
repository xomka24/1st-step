<html>

<head>
	<title>������� 5</title>
</head>

<body>


	
	<form method="POST">
	
		<p>������� �: <input type="text" name="a"></p>
		������� B: <input type="text" name="b">
		<p><input type="submit"></p>
		
	</form>
	
	<strong>�����:</strong>
	
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