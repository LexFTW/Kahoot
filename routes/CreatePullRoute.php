<?php

  include '../controllers/PullController.php';
  if ($_SERVER['REQUEST_METHOD'] === 'GET'){
    $pull = new PullController;
    $pulls = $pull->getPulls();
  }


 ?>
