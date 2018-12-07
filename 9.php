<html>
<body>
	<?php 
		$a = "Mississippi Alabama Texas Massachusetts Kansas";$b = explode(' ',$a);
		foreach ($b as $c) {
			$n = strlen($c);
			if($c[$n-1]=='s'&&$c[$n-2]=='a'&&$c[$n-3]=='x')	$d[0] = $c;
			if($c[0]=='K'&&$c[$n-1]=='s') $d[1] = $c;
			if($c[0]=='M'&&$c[$n-1]=='s') $d[2] = $c;
			if($c[$n-1]=='a') $d[3] = $c;
		}
		for ($i=0; $i < count($d); $i++) echo $d[$i]." is in index " . $i . "<br>";
	 ?>
</body>
</html>