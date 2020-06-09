<!DOCTYPE html>
<html>
<head>
	<title>tieu de</title>
</head>
<body>
	<?php
		function Nto($n){
			if($n<2){
				return 0;
			}
			for($i=2;$i<$n;$i++)
			{
				if($n%$i==0) return 0;
			}
			return 1;
		}
		function hhao($n)
		{
			$tong=0;
			for($i=1;$i<$n;$i++)
			{
				if($n%$i==0) $tong+=$i;
			}
			if($tong==$n) return true;

		}
		if(isset($_POST["name"])){
			$name = $_POST["name"];
			if(hhao($name)) echo "la so hoan hao";
			else echo "khong la so hoan hao";
			$a=array();
			$DEM=1;
			for($i=0;$i<100;$i++)
			{
				$a[$i]= $name%10;
				if($name < 10)
				{
					$a[$i] = $name;
					break;
				}
				$DEM++;
				$name = (int)($name/10);
			}
		for($i=0;$i<=$DEM;$i++)
		{
			for($j=$i+1;$j<=$DEM;$j++)
			{
				if($a[$i]>$a[$j])
				{
					$tg=$a[$i];
					$a[$i]=$a[$j];
					$a[$j]=$tg;
				}
			}
		}
		for ($i=0; $i <= $DEM; $i++) { 
			echo $a[$i]." ";		
		}
	}
	?>
</body>
</html>