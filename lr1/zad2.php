<html>

<head>

	<title>������� 2</title>

</head>

<body>

	
	<form method="POST">
	
		<p>������� �����: <input type="text" name="ch"></p>
			
	</form>

	<?php
		
		$ch=$_POST['ch'];
		
		if ($ch>=0)
			$ch++;
		else
			$ch-=2;
	
	?>
	
	<strong>�����:</strong>
	
	<?=	"$ch";
	?>
	
</body>

</html>