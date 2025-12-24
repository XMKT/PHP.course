<?php
$seconds = 0;
$running = true;
while ($running) {
	$seconds++;
	echo "Seconds: {$seconds}<br>";
	if ($seconds >= 10) { // Условный выход из цикла
		$running = false;
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