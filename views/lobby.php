<?php

include 'layouts/head.php';
include '../routes/LobbyRoute.php'

 ?>

<body class="animation">
  <main class="container-fluid">
    <div class="anonym">
      <div class="card lobby__card">
        <div class="card-body lobby__body">
          <h2 class="text-center mb-2 lobby__title">PIN CODE: <br /><?php echo $_SESSION['pin'] ?></h2>
          <button type="button" class="btn btn-light btn-lg d-block mx-auto lobby__button">
            <i class="fas fa-play"></i>
          </button>
          <button role="button" href="play.php" class="btn btn-success btn-lg d-block mx-auto lobby__button">
            <i class="fas fa-play"></i>
          </button>
          <div class="row">
            <?php
              for ($i=0; $i < count($players); $i++) {
                echo '<div class="col-4 text-center lobby__players" style="text-transform: uppercase">' . $players[$i]['name'] . '</div>';
              }
            ?>
          </div>
        </div>
      </div>
    </div>
  </main>
</body>
</html>
