<?php

include '../controllers/RoomController.php';

session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  if(!empty($_POST['name'])){
    $room = new RoomController;
    if($room->createAnonym($_POST['name'])){
    	unset( $_SESSION['auth']);
      header('Location: lobby_anonymous.php');
      die();
    }else{
      
    }
  }else{

  }
}

?>
