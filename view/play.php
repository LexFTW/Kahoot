<?php
	include "../model/Database.php";
	$pdo = Database::getInstance("localhost","Kahoot","root","")-> getPDO();
?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title></title>
		<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">	
		<?php
			include 'layouts/links.php';
		?>
		<meta http-equiv="refresh" content="5" > 
	</head>
	<body class="colorBackground">
		<main class="container-fluid">
			<div class="anonym">
				<div class="card anonym__card">
					<div class="card-body anonym__body">
						
					
						
					</div>
				</div>
			</div>
		</main>
		
	</body>
</html>
