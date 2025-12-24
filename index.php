<?php
$foods = array("apple", "orange", "banana", "coconut");
$foods[0] = "pineapple";
array_push($foods, "kiwi");
array_pop($foods);
foreach ($foods as $food) {
	echo $food . "<br>";
}
echo "Number of foods: " . count($foods);
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