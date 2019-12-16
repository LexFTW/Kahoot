<?php

include '../controllers/RoomController.php';
include '../models/Auth.php';

session_start();

if($_SERVER['REQUEST_METHOD'] === 'POST'){
  if(isset($_POST['surveyId'])){
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
  }else {
    $room = new RoomController;
    $id_room = $room->getIdRoom();

    $data = [
      'id_room' => $id_room
    ];

    $status = $room->updateStatusRoom($data);
    echo $status;
  }
}

if(empty($_SESSION['pin'])){
  header('Location: index.php');
}

$room = new RoomController;
$players = $room->getPlayers();
$status = $room->getStatusRoom($_SESSION['pin']);
if($status[0]['status'] == 1){
  $url = $_SERVER['REQUEST_URI'];
  header("Refresh: 15; URL = $url");
}else{
  header('Location: game.php');
}






 ?>
