<?php
$grade = 'B';
switch ($grade) {
	case 'A':
		echo "You did great!";
		break;
	case 'B':
		echo "You did good!";
		break;
	case 'C':
		echo "You did okay.";
		break;
	case 'D':
		echo "You did poorly.";
		break;
	case 'F':
		echo "You failed.";
		break;
	default:
		echo "{$grade} is not a valid grade.";
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