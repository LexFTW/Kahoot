<?php

include '../controllers/RoomController.php';

session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  if(!empty($_POST['name'])){
    $room = new RoomController;
    if($room->createAnonym($_POST['name'])){
      header('Location: lobby.php');
      die();
    }else{
      
    }
  }else{

  }
}

?>
