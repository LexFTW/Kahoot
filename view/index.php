<?php
	include "../model/database2.php";

	$pdo = Database::getInstance("localhost","kahoot","alexis","1234")-> getPDO();
 ?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="../public/css/bootstrap.min.css">
	<!-- <link rel="stylesheet" href="../public/css/fontawesome_all.css">
	<script src="../public/css/fontawesome_all.js" charset="utf-8"></script> -->
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>
<body>
	<main class="container-fluid">
		<div class="row justify-content-center">
			<div class="col-md-6">
				<div class="card">
					<div class="card-body">
						<form class="" action="index.html" method="post">
							<!-- Inicio Contraseña -->
							<div class="form-group">
								<div class="input-group mb-3">
								  <div class="input-group-prepend">
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
								<div class="input-group mb-3">
								  <div class="input-group-prepend">
								    <span class="input-group-text" id="password-addon">
											<i class="fas fa-users"></i>
										</span>
								  </div>
								  <input type="text" class="form-control" placeholder="Contraseña" aria-label="Contraseña" aria-describedby="password-addon">
								</div>
							</div>
							<!-- Fin Contraseña -->
							<input type="submit" class="btn btn-primary" name="submit" value="Iniciar Sesión">
						</form>
					</div>
				</div>
			</div>
		</div>
	</main>
</body>
</html>
