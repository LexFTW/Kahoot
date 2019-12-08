<?php
	session_start();
	include "../controller/loginController.php";

	if(!empty($_SESSION['isLogged'])) {
		header("Location: dashboard.php");
    die();
	}

	if(isset($_POST['username'])){
		if(login($_POST['username'], $_POST['password'])){
			$_SESSION['isLogged'] = True;
			header("Location: dashboard.php");
			die();
		}else{
			echo '<script>' .
			'window.addEventListener("load", function(){' .
			'document.getElementsByClassName("login__alert")[0].style.display = "block"' .
			'});' .
			'</script>';
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
  <?php include 'layouts/links.php' ?>
</head>
<body class="colorBackground">
	<main class="container-fluid">
		<div class="row justify-content-center">
			<div class="col-md-6">
				<div id="login">
					<div class="card login__card">
						<div class="card-header login__card-header">
							<img class="img-fluid mx-auto d-block" src="../public/img/a3531f69e64b18edd7599b446bb4e025f988a856.svg" alt="Logo Kahoot" title="Logo Kahoot" />
						</div>
						<div class="card-body">
							<div class="row justify-content-center">
								<form action="login.php" method="post">
									<div class="form-group">
										<div class="input-group mb-3">
  									  <div class="input-group-prepend">
  									    <span class="input-group-text login__input-group" id="user-addon">
  												<i class="fas fa-user"></i>
  											</span>
  									  </div>
  									  <input type="text" name="username" class="form-control login__input-form-control" placeholder="Nombre de Usuario" aria-label="Nombre de Usuario" aria-describedby="user-addon">
  									</div>
									</div>
									<div class="form-group">
										<div class="input-group mb-3">
											<div class="input-group-prepend">
												<span class="input-group-text login__input-group" id="password-addon">
													<i class="fas fa-lock"></i>
												</span>
											</div>
											<input type="password" name="password" class="form-control login__input-form-control" placeholder="Contraseña" aria-label="Contraseña" aria-describedby="password-addon">
										</div>
									</div>
									<div class="form-group">
										<input type="submit" class="btn btn-primary login__button-submit" name="submit" value="Iniciar Sesión">
									</div>
									<div class="form-group">
										<div class="alert alert-danger login__alert" role="alert">
											El usuario y/o la contraseña son incorrectos.
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</main>
</body>
</html>
