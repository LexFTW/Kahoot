<?php

  include '../controllers/PullController.php';
  $pull = new PullController;

  if ($_SERVER['REQUEST_METHOD'] === 'GET'){
    $pulls = $pull->getPulls();
  }else if($_SERVER['REQUEST_METHOD'] === 'POST'){
    if(!empty($_POST['new_pull'])){
      $pull->create($_POST['new_pull']);
      
    }else{
      echo $_POST['pulls'];
    }
  }


 ?>
