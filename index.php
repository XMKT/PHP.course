<?php
$capitals = array(
	"USA" => "Washington D.C.",
	"Japan" => "Kyoto",
	"India" => "New Delhi"
);
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$country = $_POST['country'];
	$capital = $capitals[$country];
	echo "The capital of {$country} is {$capital}.";
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
		<label>Enter a country:</label><br>
		<input type="text" name="country"><br>
		<input type="submit" value="Submit">
	</form>
</body>

</html>