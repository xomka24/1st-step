<html>

<head>
	<title>������� 7</title>
</head>

<body>
	
	
	<form method="POST">
	
		��������� ������:<input type="text" name="m">
		
	</form>
	
	<?php
	if (isset($m)) {
		$m=$_POST['m'];
		$e=array();
		
		for ($i=0; $i<10; $i++)
		{
			$p=strpos($m, ",");
			$e[$i]=substr($m, 0, $p);
			$m=substr($m, ($p+1));
	
		}
	}
	?>
	
	<strong>��������� ������:</strong>
		
	<?php
		for ($i=0; $i<10; $i++)
			echo"$e[$i] ";
	?>
	
	<br></br>
	<strong>�����:</strong>
	
	<?php
	
		for ($i=9; $i>0; $i--)
		{
			
			
			if(($e[$i]>$e[0])and($e[$i]<$e[9]))
			{
				echo "$i";
				break;
			}
			
			elseif($i==1)
			{
				echo "0";
				break;
			}
		}
	
	?>

</body>


</html>