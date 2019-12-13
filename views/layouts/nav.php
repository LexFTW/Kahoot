<nav class="navbar navbar-expand-lg navbar-light bg-light dashboard__nav">
  <a class="navbar-brand" href="../views/dashboard.php">
    <img src="../public/img/a3531f69e64b18edd7599b446bb4e025f988a856.svg" width="50%" class="img-fluid" alt="Logo Kahoot" title="Logo Kahoot">
  </a>
  <div class="navbar-collapse collapse w-100 order-3 dual-collapse2">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-white" href="#" onclick="document.getElementById('dropdown-menu-auth').classList.toggle('d-block')" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <?php echo $_SESSION['auth']->getName(); ?>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown" id="dropdown-menu-auth">
            <a class="dropdown-item" href="#">Perfil</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Cerrar Sesión</a>
          </div>
        </li>
      </ul>
  </div>
</nav>
