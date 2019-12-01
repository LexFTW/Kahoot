<?php 
	include "../model/database.php";

	$pdo = Database::getInstance("localhost","root","")-> getPDO();
 ?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="formpost.php" method="post">
	    Nombre: <input type="text" name="nombre"><br>
	    Email: <input type="text" name="email"><br>
	    <input type="submit" value="Enviar">
	</form>
</body>
</html>