<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_SPECIAL_CHARS);
	$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
	if (empty($username)) {
		echo "Username is required.";
	}
	if ($email === false) {
		echo "Invalid email format.";
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
</body>

</html>