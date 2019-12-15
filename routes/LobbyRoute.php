<?php

include '../controllers/RoomController.php';
include '../controllers/PinCodeController.php';

session_start();

if($_SERVER['REQUEST_METHOD'] === 'POST'){
  $pin = new PinCodeController;
  $_SESSION['pin'] = $pin->generateCodePin();
  print_r($_POST);
}

// echo $_SESSION['pin'];

// if(empty($_SESSION['pin'])){
//   header('Location: index.php');
// }
//
// $url = $_SERVER['REQUEST_URI'];
// header("Refresh: 15; URL = $url");
//
// $room = new RoomController;
// $players = $room->getPlayers($_SESSION['pin']);



 ?>
