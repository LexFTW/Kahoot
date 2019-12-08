<?php
	session_start();
	include "../model/Database.php";
	include "../controller/PincodeController.php";

	if(isset($_POST['surveyId'])){
		$surveyId = $_POST['surveyId'];
		$_SESSION['pin'] = generateCodePin($surveyId);
		createRoom($_POST['surveyId'], $_SESSION['pin']);
	}
?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title></title>
		<?php
			include 'layouts/links.php';
		?>
		<meta http-equiv="refresh" content="15" >
	</head>
	<body>
		<main class="container-fluid">
			<div class="anonym">
				<div class="card anonym__card">
					<div class="card-body anonym__body">
						<h5><?php echo $_SESSION['pin'] ?></h5>
					</div>
				</div>
			</div>
		</main>
	</body>
</html>
