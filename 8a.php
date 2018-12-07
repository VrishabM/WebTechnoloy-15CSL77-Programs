<!DOCTYPE html>
<html>
<body>
	<form action="1.php" method="post">
		Enter Number 1 : <input type="number" name="a"><br>
		Enter Number 2 : <input type="number" name="b"><br>
		<input type="submit" name="s">
	</form>
	<?php 
		if(isset($_POST['s'])){
			$a = $_POST['a'];$b = $_POST['b'];
			echo "<br>Addition : ".($a+$b)."<br>Subtraction : ".($a-$b)."<br>Multiplication : ".($a*$b)."<br>Division : ".($a/$b);
		}
	 ?>
</body>
</html>