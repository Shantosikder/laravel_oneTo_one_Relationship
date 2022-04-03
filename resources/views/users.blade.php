<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>


	<?php 

foreach ($users as $user) {
	echo $user->pro->name;
	echo "<br>";
	echo $user->pro->telephone;
	echo "<br>";
	echo "<br>";
	echo $user->name;
	echo "<br>";
	echo $user->email;

}

	 ?>

</body>
</html>