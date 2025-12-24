<?php
if (isset($_POST['submit'])) {
	if (isset($_POST['foods'])) {
		foreach ($_POST['foods'] as $food) {
			echo "You like {$food}<br>";
		}
	}
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>

<body>
	<form action="index.php" method="post">
		<input type="checkbox" name="foods[]" value="Pizza"> Pizza<br>
		<input type="checkbox" name="foods[]" value="Hamburger"> Hamburger<br>
		<input type="checkbox" name="foods[]" value="Taco"> Taco<br>
		<input type="submit" name="submit" value="Submit">
	</form>
</body>

</html>