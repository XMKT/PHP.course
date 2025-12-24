<?php
if (isset($_POST['confirm'])) {
	$credit_card = $_POST['credit_card'] ?? null;
	if ($credit_card != null) {
		echo "You selected {$credit_card}.";
	} else {
		echo "Please make a selection.";
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
		<input type="radio" name="credit_card" value="Visa"> Visa<br>
		<input type="radio" name="credit_card" value="MasterCard"> MasterCard<br>
		<input type="radio" name="credit_card" value="American Express"> American Express<br>
		<input type="submit" name="confirm" value="Confirm">
	</form>
</body>

</html>