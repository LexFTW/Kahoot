<!DOCTYPE html>
<html>
<head>
  <?php include 'layouts/links.php';
  
	include "../controller/loginController.php";

	if(isset($_POST['username'])){
		if(login($_POST['username'], $_POST['password'])){
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
							<form action="login.php" method="post">
                <div class="col-md-6 offset-3">
                  <!-- Inicio Contraseña -->
  								<div class="form-group">
  									<div class="input-group mb-3  mx-auto">
  									  <div class="input-group-prepend">
  									    <span class="input-group-text login__input-group" id="user-addon">
  												<i class="fas fa-user"></i>
  											</span>
  									  </div>
  									  <input type="text" name="username" class="form-control login__input-form-control" placeholder="Email" aria-label="Nombre de Usuario" aria-describedby="user-addon">
  									</div>
  								</div>
  								<!-- Fin Contraseña -->
  								<!-- Inicio Contraseña -->
  								<div class="form-group">
  									<div class="input-group mb-3 mx-auto">
  									  <div class="input-group-prepend">
  									    <span class="input-group-text login__input-group" id="password-addon">
  												<i class="fas fa-lock"></i>
  											</span>
  									  </div>
  									  <input type="password" name="password" class="form-control login__input-form-control" placeholder="Contraseña" aria-label="Contraseña" aria-describedby="password-addon">
  									</div>
  								</div>
  								<!-- Fin Contraseña -->
  								<input type="submit" class="btn btn-primary d-block mx-auto login__button-submit mb-3" name="submit" value="Iniciar Sesión">
                
							</form>
							<div class="alert alert-danger  login__alert" role="alert">
								El usuario o la contraseña son incorrectos.
							</div>	
				</div>
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</main>
</body>
</html>
