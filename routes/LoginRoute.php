<?php

include '../controllers/AuthController.php';

session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if(!empty($_POST['email']) AND !empty($_POST['password'])){

          $authController = new AuthController;
          $login = $authController->login($_POST['email'], $_POST['password']);

          print_r($login);

          if($login != NULL){
            $_SESSION['auth'] = $login;
            header('Location: dashboard.php');
            die();
          }else{
            echo '<script>window.addEventListener("load", function(){document.getElementsByClassName("alert")[0].style.display = "block"})</script>';
          }

    }else{
      echo '<script>window.addEventListener("load", function(){document.getElementsByClassName("alert")[0].style.display = "block"})</script>';
    }
}else{
  if(!empty($_SESSION['auth'])){
    header('Location: dashboard.php');
    die();
  }
}


 ?>
