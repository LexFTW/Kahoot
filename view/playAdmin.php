<?php
	include "../model/Database1.php";
	$pdo = Database::getInstance("localhost","kahoot","kahoot","P@ssw0rd")-> getPDO();

?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title></title>
		<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">	
		<?php
			include 'layouts/links.php';
			include "../controller/startPlayAdminController.php";
			$players=playerSurvey();
		?>
		<meta http-equiv="refresh" content="5" > 
	</head>
	<body style="background-color:#46178F; color: white;">

		<main class="container-fluid">
			<div class="anonym">
				<div class="card anonym__card">
					<div class="card-body anonym__body">
						<div class="row flex-column justify-content-center">

						  
						 	<div class="col-md-3 align-self-center">
						    	<?php echo "<div class='p-2 text-center bg-primary text-white' style='font-size:80px;'>PIN: ".$_SESSION['pin']."</div>"; ?>
							</div>
							
							<div class="p-2 align-self-center"><button type="button" class="text-center btn btn-success btn-circle btn-xl"><i class="fa fa-play"></i></button></div>
						
							<?php 
								if ($players) {
									echo "<div class='p-2'>Jugadores en total: ".count($players).".</div>";

									echo "<div class='p-2 d-flex flex-wrap justify-content-center'>";
									foreach ($players as $player) {
								 		echo "<div class='m-3'>".$player['name']."</div>";
								 	} 
								 	echo "</div>";
								}
							
							?>
						  </div>						 

						</div>
						
		
					</div>
				</div>
			</div>
		</main>
		
	</body>
</html>
