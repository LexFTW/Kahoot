<?php
	session_start();
	include "../model/Database.php";
	include "../controller/PincodeController.php";

	if(isset($_POST['surveyId'])){
		$surveyId = $_POST['surveyId'];
		$_SESSION['pin'] = generateCodePin($surveyId);
		createRoom($_POST['surveyId'], $_SESSION['pin']);
	}

	$players = getPlayers($_SESSION['pin']);
?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title></title>
		<?php
			include 'layouts/links.php';
		?>
		<meta http-equiv="refresh" content="15">
	</head>
	<body>
		<main class="container-fluid">
			<div class="anonym">
				<div class="card anonym__card">
					<div class="card-body anonym__body">
						<h3 class="text-center mb-5">PIN CODE: <br /><?php echo $_SESSION['pin'] ?></h5>
						<div class="row">
							<?php

								for ($i=0; $i < count($players); $i++) {
									echo '<div class="col-4 text-center" style="text-transform: uppercase">' . $players[$i]['name'] . '</div>';
								}

							?>
						</div>
					</div>
				</div>
			</div>
		</main>
	</body>
</html>
