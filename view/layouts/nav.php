<?php
        include "../controller/logoutController.php";

           if (isset($_GET['logout'])){
            logout();
           }
     
          ?>
<nav class="navbar navbar-expand-lg navbar-light bg-light dashboard__nav">
  <a class="navbar-brand" href="dashboard.php">
    <img src="../public/img/a3531f69e64b18edd7599b446bb4e025f988a856.svg" width="50%" class="img-fluid" alt="Logo Kahoot" title="Logo Kahoot">
  </a>
  <div class="collapse navbar-collapse">
    <ul class="nav navbar-nav navbar-right mr-auto">
      <li>
        <a role="button" class="btn btn-info float-left" href="#"> User: <?php echo $_SESSION['nameUser']." ".$_SESSION['LastnameUser'];  ?></a>

      </li>
      <li>
        <a role="button" class="btn btn-danger float-left" href="dashboard.php?logout=true"><i class="fas fa-sign-out-alt"></i></a>
      </li>

      
    </ul>
  </div>
</nav>
