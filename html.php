<!DOCTYPE html>
<html>
<head>
	<title>tieude</title>
</head>
<body>
	<form action="html.php" method="post">
		<input type="number" name="name">
		<input type="submit" name="submit" value="nhan">
	</form>
	<?php 
		function ktra($n)
		{
			$dem=0;
			for($i=1;$i<$n;$i++)
			{
				if($i%3==0) $dem++;
			}
			echo $dem;
		}
		if(isset($_POST["name"]))
		{
			$name= $_POST["name"];
			ktra($name);
		}
	?>
</body>
</html>