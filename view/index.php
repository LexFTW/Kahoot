<?php
	include "../model/database2.php";

	$pdo = Database::getInstance("localhost","Kahoot","root","P@ssw0rd")-> getPDO();
 ?>

<!DOCTYPE html>
<html>
<head>
	 <?php include '../view/layouts/links.html';  ?>
	 <link rel="stylesheet" type="text/css" href="../public/css/changingBackground.css">
</head>
<body>
	<main class="container-fluid">
		<div class="row justify-content-center ColorBacground">
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
