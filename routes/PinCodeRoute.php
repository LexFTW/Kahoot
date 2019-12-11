<?php

include '../controllers/PinCodeController.php';

session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  if(!empty($_POST['pin'])){
    $pinCodeController = new PinCodeController;
    if($pinCodeController->pin($_POST['pin']) === 1){
      $_SESSION['pin'] = $_POST['pin'];
      header('Location: anonym.php');
      die();
    }
  }
}


 ?>
