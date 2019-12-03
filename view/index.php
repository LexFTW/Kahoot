<?php
	include "../model/database2.php";
	$pdo = Database::getInstance("localhost","Kahoot","root","P@ssw0rd")-> getPDO();
?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title></title>
		<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
		<?php
			include 'layouts/links.php';
			include '../controller/pinController.php';
		?>
	</head>
	<body class="colorBackground">
		<main class="container-fluid">
			<div class="anonym">
				<div class="card anonym__card">
					<div class="card-body anonym__body">
						<img class="img-fluid mx-auto d-block" src="../public/img/a3531f69e64b18edd7599b446bb4e025f988a856.svg" alt="Logo Kahoot" title="Logo Kahoot" />
						<form method="post">
						<input class="form-control col-4 mt-4 col-xs-12 mx-auto anonym__input" type="number" name="pin" value="pin" name="" placeholder="Introducir PIN">
						<button class="btn btn-primary col-4 mt-2 col-xs-12 mx-auto btn-block anonym__button" type="submit" name="buttonPin">Entrar</button>
						</form>
					</div>
				</div>
			</div>
		</main>
		
	</body>
</html>
