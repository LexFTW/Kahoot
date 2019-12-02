<?php
	include "../model/database2.php";
	$pdo = Database::getInstance("localhost","kahoot","alexis","1234")-> getPDO();
?>

<!DOCTYPE html>
<html>
<head>
  <?php include 'layouts/links.php' ?>
</head>
<body class="ColorBacground">
	<main class="container-fluid">
		<div class="row justify-content-center">
			<div class="col-md-6">
				<div id="login">
					<div class="card login__card">
						<div class="card-header login__card-header">
							<img class="img-fluid mx-auto d-block" src="../public/img/a3531f69e64b18edd7599b446bb4e025f988a856.svg" alt="Logo Kahoot" title="Logo Kahoot" />
						</div>
						<div class="card-body">
							<form class="" action="index.html" method="post">
                <div class="col-md-6 offset-3">
                  <!-- Inicio Contraseña -->
  								<div class="form-group">
  									<div class="input-group mb-3  mx-auto">
  									  <div class="input-group-prepend">
  									    <span class="input-group-text login__input-group" id="user-addon">
  												<i class="fas fa-users"></i>
  											</span>
  									  </div>
  									  <input type="text" class="form-control login__input-form-control" placeholder="Nombre de Usuario" aria-label="Nombre de Usuario" aria-describedby="user-addon">
  									</div>
  								</div>
  								<!-- Fin Contraseña -->
  								<!-- Inicio Contraseña -->
  								<div class="form-group">
  									<div class="input-group mb-3 mx-auto">
  									  <div class="input-group-prepend">
  									    <span class="input-group-text login__input-group" id="password-addon">
  												<i class="fas fa-users"></i>
  											</span>
  									  </div>
  									  <input type="text" class="form-control login__input-form-control" placeholder="Contraseña" aria-label="Contraseña" aria-describedby="password-addon">
  									</div>
  								</div>
  								<!-- Fin Contraseña -->
  								<input type="submit" class="btn btn-primary d-block mx-auto login__button-submit" name="submit" value="Iniciar Sesión">
                </div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</main>
</body>
</html>
