<html>

<head>
	<title>������� 9</title>
</head>

<body>
	
	
	<form method="POST">
	
		������� ������: <input type="text" name="str">
	
	</form>
	
	<?php
		
		$str=$_POST['str'];
		$str=preg_replace('/[a-z]/','',$str);
		$res=mb_strlen(preg_replace('/[0-9]/','',$str),'windows-1251');
		echo $res;
		
	?>
	
</body>


</html>