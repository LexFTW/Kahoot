<?php

include '../controllers/RegisterController.php';
include '../models/Auth.php';
session_start();

if($_SERVER['REQUEST_METHOD'] === 'POST'){
  if(empty($_POST['firstname']) || empty($_POST['lastname']) || empty($_POST['email']) || empty($_POST['password']) || empty($_POST['repeatpassword'])){
    showMessageError('Faltan campos por rellenar.');
  }else{
    if($_POST['password'] !== $_POST['repeatpassword']){
      showMessageError('La contraseña introducida no coincide.');
    }else{
      $register = new RegisterController;
      $data = [
        'firstname' => $_POST['firstname'],
        'lastname' => $_POST['lastname'],
        'email' => $_POST['email'],
        'password' => $_POST['password']
      ];
      $isRegister = $register->register($data);
      if($isRegister == 1){
        header('Location: login.php');
        die();
      }
    }
  }
}

function showMessageError($string){
  echo '<script>window.addEventListener("load", function(){' .
    'document.getElementsByClassName("alert")[0].style.display = "block";'.
    'document.getElementsByClassName("alert")[0].innerHTML += "'.$string.'"})</script>';
}

 ?>
