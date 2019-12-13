<?php

include '../routes/LoginRoute.php';
include 'layouts/head.php';

 ?>

 <body class="animation">
  <div class="alert alert-danger" role="alert">
    <i class="fas fa-times mr-3"></i>El usuario y/o la contraseña son incorrectos.
  </div>
 	<main class="container-fluid">
 		<div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card login__card">
          <div class="card-header login__card-header">
            <img class="img-fluid mx-auto d-block" src="../public/img/a3531f69e64b18edd7599b446bb4e025f988a856.svg" alt="Logo Kahoot" title="Logo Kahoot" />
          </div>
          <div class="card-body">
            <form method="post">
              <div class="form-group">
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text login__input-group" id="user-addon">
                      <i class="fas fa-user"></i>
                    </span>
                  </div>
                  <input type="text" name="email" class="form-control login__input-form-control" placeholder="Nombre de Usuario" aria-label="Nombre de Usuario" aria-describedby="user-addon">
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
                <input type="submit" value="Iniciar Sesión" class="btn btn-primary login__button-submit">
              </div>
            </form>
            <hr />
            <a role="button" class="btn btn-primary login__button-submit" href="register.php">Registrate</a>
          </div>
        </div>
      </div>
 		</div>
 	</main>
 </body>
