<?php
	include "../model/database2.php";

	$pdo = Database::getInstance("localhost","Kahoot","root","P@ssw0rd")-> getPDO();
 ?>

<!DOCTYPE html>
<html>
<head>
<<<<<<< HEAD
	 <?php include '../view/layouts/links.html';  ?>
	 <link rel="stylesheet" type="text/css" href="../public/css/changingBackground.css">
=======
	<title>Kahoot</title>
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<link rel="stylesheet" href="../public/css/bootstrap.min.css">
	<link rel="stylesheet" href="../public/css/stylesheet.css">
>>>>>>> 21e8f2a060b8905ef5f1679eb7ade1ad0117b47f
</head>
<body>
	<main class="container-fluid">
		<div class="row justify-content-center ColorBacground">
			<div class="col-md-6">
				<div id="login">
					<div class="card login__card">
						<div class="card-header login__card-header">
							<img class="img-fluid mx-auto d-block" src="../public/img/a3531f69e64b18edd7599b446bb4e025f988a856.svg" alt="Logo Kahoot" title="Logo Kahoot" />
						</div>
						<div class="card-body">
							<form class="" action="index.html" method="post">
								<!-- Inicio Contraseña -->
								<div class="form-group">
									<div class="input-group mb-3 col-9 mx-auto">
									  <div class="input-group-prepend login__input-group-prepend">
									    <span class="input-group-text" id="user-addon">
												<i class="fas fa-users"></i>
											</span>
									  </div>
									  <input type="text" class="form-control" placeholder="Nombre de Usuario" aria-label="Nombre de Usuario" aria-describedby="user-addon">
									</div>
								</div>
								<!-- Fin Contraseña -->
								<!-- Inicio Contraseña -->
								<div class="form-group">
									<div class="input-group mb-3 col-9 mx-auto">
									  <div class="input-group-prepend">
									    <span class="input-group-text" id="password-addon">
												<i class="fas fa-users"></i>
											</span>
									  </div>
									  <input type="text" class="form-control" placeholder="Contraseña" aria-label="Contraseña" aria-describedby="password-addon">
									</div>
								</div>
								<!-- Fin Contraseña -->
								<input type="submit" class="btn btn-primary mx-auto d-block login__button-submit" name="submit" value="Iniciar Sesión">
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</main>
</body>
</html>
