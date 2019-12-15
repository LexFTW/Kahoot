<?php

include '../controllers/RoomController.php';
include '../models/Auth.php';

session_start();

if($_SERVER['REQUEST_METHOD'] === 'POST'){
  $pin = new RoomController;
  $pincode = $pin->generateCodePin();
  $data = [
    'id_poll' => $_POST['surveyId'],
    'id_user' => $_SESSION['auth']->getId(),
    'pin' => $pincode,
    'status' => '1'
  ];

  if($pin->createRoom($data) == 1){
    $_SESSION['pin'] = $pincode;
  }

}

if(empty($_SESSION['pin'])){
  header('Location: index.php');
}

$url = $_SERVER['REQUEST_URI'];
header("Refresh: 15; URL = $url");

$room = new RoomController;
$players = $room->getPlayers($_SESSION['pin']);



 ?>
