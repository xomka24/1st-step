<html>
	
<head>
	<title>������� 8</title>
</head>

<body>
	

	
	<form method="POST">
	
		<p>������� ����� A: <input type="text" name="A"></p>
		<p>������� ����� B: <input type="text" name="B"></p>
		<p>������� ����� C: <input type="text" name="C"></p>
		<p>������� ����� D: <input type="text" name="D"></p>
		
		<Input type="submit" value="���������">
	
	</form>
	
	<?php
	
		function Stepen ($E)
		{
			$s2 = pow($E,2);
			$s3= pow($E,3);
			$s4=pow($E,4);
			return "$s2, $s3, $s4";
		}
	
		$A=$_POST['A'];
		$B=$_POST['B'];
		$C=$_POST['C'];
		$D=$_POST['D'];
			
		echo " A:",Stepen($A), "<br> B:", $B = Stepen($B), "<br> C:",$C = Stepen($C), "<br> D:", $D = Stepen($D);
	
	?>
	
</body>



</html>