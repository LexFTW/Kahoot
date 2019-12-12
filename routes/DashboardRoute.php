<?php

include '../controllers/PullController.php';

session_start();

if ($_SERVER['REQUEST_METHOD'] === 'GET'){
  if(empty($_SESSION['auth'])){
    header('Location: login.php');
    die();
  }

  $pull = new PullController;
  $pulls = $pull->getPulls();

}


 ?>
