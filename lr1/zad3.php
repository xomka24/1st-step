<html>

<head>
	<title>������� 3</title>
</head>

<body>

	
	<form method="POST">
		
		������� �����: <input type="text" name="ch">
	
	</form>
	<strong>������:</strong>
	<?php
	
		$ch=$_POST['ch'];
		
		switch ($ch)
		{
			case 1:
				echo "�����";
				break;
			case 2:
				echo "�������������������";
				break;
			case 3:
				echo "�����������������";
				break;
			case 4:
				echo "������";
				break;
			case 5:
				echo "�������";
				break;
			default:
				echo "������";
				break;
		}
		
	?>
	
<body>

</html>