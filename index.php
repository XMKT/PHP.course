<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$radius = $_POST['radius'];
	$circumference = round(2 * pi() * $radius, 2);
	$area = round(pi() * pow($radius, 2), 2);
	$volume = round((4 / 3) * pi() * pow($radius, 3), 2);
	echo "Circumference: {$circumference} cm<br>";
	echo "Area: {$area} cm²<br>";
	echo "Volume: {$volume} cm³<br>";
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
		<label>Radius:</label><br>
		<input type="text" name="radius"><br>
		<input type="submit" value="Calculate">
	</form>

</body>

</html>